<?php

namespace App\Http\Controllers;

use App\Ads;
use App\Campaign;
use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        $ads = Ads::all();
        return view('dashboard.index', compact('ads'));
    }
    public function profile()
    {
        $camp_num = Campaign::whereUserId(\auth()->id())->count();
        $user = Auth::user();
        return view('dashboard.profile', compact('user', 'camp_num'));
    }
    public function referrals()
    {
        $user = Auth::user();
        $referrals = User::where('referrer_id',$user->id)->get();
        return view('dashboard.referrals', compact('user', 'referrals'));
    }

    public function setting()
    {
        $user = Auth::user();
        return view('dashboard.setting', compact('user'));
    }

    public function update_profile()
    {

    }

    public function storePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect()->back()->with('success', "Password Changed Successfully");
    }
}
