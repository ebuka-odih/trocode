<?php

namespace App\Http\Controllers;

use App\Withdraw;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawController extends Controller
{
    public function withdraw()
    {
        $user = Auth::user();
        return view('dashboard.withdraw', compact('user'));
    }

    public function proWithdraw(Request $request)
    {
        $withdraw = new Withdraw();
        if (\auth()->user()->balance < $request->amount){
            return redirect()->back()->with('declined', "You don't have sufficient balance");
        }
        $withdraw->user_id = Auth::id();
        $withdraw->bank = $request->bank;
        $withdraw->acct_number = $request->acct_number;
        $withdraw->acct_name = $request->acct_name;
        $withdraw->amount = $request->amount;
        $withdraw->save();
        return redirect()->back()->with('success', "Withdrawal Request Sent Successfully");

    }
}
