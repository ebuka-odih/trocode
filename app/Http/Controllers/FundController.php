<?php

namespace App\Http\Controllers;

use App\Fund;
use Illuminate\Http\Request;

class FundController extends Controller
{
    public function deposits()
    {
        $deposits = Fund::all();
        return view('dashboard.deposit.deposits', compact('deposits'));
    }

}
