<?php

namespace App\Http\Controllers;

use App\Ads;
use App\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function setting()
    {
        $user = Auth::user();
        return view('dashboard.setting', compact('user'));
    }
}
