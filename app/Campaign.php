<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
