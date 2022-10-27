<?php

namespace App\Http\Controllers;

use App\Ads;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        $ads = Ads::all();
        return view('dashboard.index', compact('ads'));
    }
}
