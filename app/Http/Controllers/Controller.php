<?php

namespace App\Http\Controllers;

use App\RefEarning;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function store_ref_earning($user_id, $title, $amt){
        
        return RefEarning::create([
            'user_id' => $user_id,
            'title' => $title,
            'earned' => $amt
        ]);

    }
}
