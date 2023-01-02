<?php

namespace App\Http\Controllers\Admin;

use App\Fund;
use App\Funding;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminFunding extends Controller
{
    public function funding()
    {
        $users = User::all();
        return view('admin.funding', compact('users'));
    }

    public function history()
    {
        $fundings = Funding::all();
        return view('admin.funding-history', compact('fundings'));
    }

    public function storeFunding(Request $request)
    {
        $fund = new Funding();
        $fund->amount = $request->amount;
        $fund->user_id = $request->user_id;
        $fund->status = 1;
        $user = User::findOrFail($fund->user_id);
        $user->balance += $request->amount;
        $user->save();
        $fund->save();
        return redirect()->back()->with('success', "Funding Sent Successfully");
    }
}
