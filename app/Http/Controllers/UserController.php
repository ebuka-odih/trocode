<?php

namespace App\Http\Controllers;

use App\Ads;
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
        $user = Auth::user();
        return view('dashboard.profile', compact('user'));
    }
}
