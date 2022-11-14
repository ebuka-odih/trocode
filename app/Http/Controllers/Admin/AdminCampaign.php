<?php

namespace App\Http\Controllers\Admin;

use App\Campaign;
use App\Http\Controllers\Controller;
use App\Mail\PublishCampaign;
use App\Mail\TopUpMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $pay = floatval($camp->days * $camp->budget);
        $user = User::findorFail($camp->user_id);
        if ($user->balance < $pay)
        {
            Mail::to($user->email)->send(new TopUpMail($camp));
            return redirect()->back()->with('declined', "This user does not have enough Balance for this campaign, a notification has been sent to them");
        }
        $user->balance -= $camp->budget;
        $user->save();
        $camp->status = 2;
        $camp->save();
        Mail::to($user->email)->send(new PublishCampaign($camp));
        return redirect()->back();
    }


}
