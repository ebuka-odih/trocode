<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefEarning extends Model
{
    protected $fillable = ['user_id','title','earned'];
}
