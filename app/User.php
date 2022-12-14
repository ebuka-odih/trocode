<?php

namespace App;

use App\Events\RegisteredEvent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Vinkla\Hashids\Facades\Hashids;

class User extends Authenticatable
{
    use Notifiable;

    protected $dispatchesEvents = [
        'created' => RegisteredEvent::class
    ];

    protected $guarded = [];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['referral_link'];

    public function getAvatarAttribute($value) {
        if(!$this->attributes['avatar']) {
            $colors = ['E91E63', '9C27B0', '673AB7', '3F51B5', '0D47A1', '01579B', '00BCD4', '009688', '33691E', '1B5E20', '33691E', '827717', 'E65100',  'E65100', '3E2723', 'F44336', '212121'];
            $background = $colors[$this->id%count($colors)];
            return "https://ui-avatars.com/api/?size=256&background=".$background."&color=fff&name=".urlencode($this->name);
        }
        return '/avatar/' . $this->attributes['avatar'];
    }


    public function referrer()
    {
        return $this->belongsTo(User::class, 'referrer_id', 'id');
    }


    public function referrals()
    {
        return $this->hasMany(\App\User::class, 'referrer_id', 'id');
    }

    public function campaign()
    {
        return $this->hasMany(Campaign::class, 'user_id');
    }
    public function funding()
    {
        return $this->hasMany(Funding::class, 'user_id');
    }


    public function getReferralLinkAttribute()
    {
        $ref_id = Hashids::encode($this->id);
        return $this->referral_link = route('register', ['ref' => $ref_id]);
    }

    public function referralCode(){
        return Hashids::encode($this->id);
    }


}
