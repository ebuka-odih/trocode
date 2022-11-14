<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Campaign extends Model
{
    public function status()
    {
        if ($this->status == 1)
        {
            return "<span class='badge bg-warning'>In Review</span>";
        }elseif ($this->status > 1){
            return "<span class='badge bg-success'>Published</span>";
        }
        return "<span class='badge bg-danger'>Cancelled</span>";
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function ads()
    {
        return $this->belongsTo(Ads::class);
    }

    public function transId()
    {
        return $this->id."433353".$this->id;
    }

    public function topup()
    {
        $camp = Campaign::findOrFail($this->id);
        $pay = floatval($camp->days * $camp->budget);
        if (Auth::user()->balance <  $pay){
            $bal = $pay - Auth::user()->balance;
            return $bal;
        }
        return $pay;
    }
}
