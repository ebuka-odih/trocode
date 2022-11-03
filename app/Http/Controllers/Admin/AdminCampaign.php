<?php

namespace App\Http\Controllers\Admin;

use App\Campaign;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminCampaign extends Controller
{
    public function campaigns()
    {
        $camp = Campaign::latest()->paginate(10);
        return view('admin.campaigns', compact('camp'));
    }

    public function preview($id)
    {
        $camp = Campaign::findOrFail($id);
        return view('admin.campaign-details', compact('camp'));
    }

    public function approve($id)
    {
        $camp = Campaign::findOrFail($id);
        $user = User::findorFail($camp->user_id);
        $user->balance -= $camp->budget;
        $user->save();
        $camp->status = 2;
        $camp->save();
        return redirect()->back();
    }


}
