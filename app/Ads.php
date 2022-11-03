<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    public function campaign()
    {
        return $this->hasMany(Campaign::class, 'ads_id');
    }
}
