<?php

namespace App\Http\Controllers;

use App\Ads;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function create($id)
    {
        $ad = Ads::findOrFail($id);
        return view('dashboard.campaign', compact('ad'));
    }
}
