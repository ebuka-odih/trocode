<?php

namespace App\Http\Controllers;

use App\Fund;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
//use Paystack;
use Unicodeveloper\Paystack\Facades\Paystack;

class FundController extends Controller
{
    public function deposits()
    {
        $deposits = Fund::all();
        return view('dashboard.deposit.deposits', compact('deposits'));
    }

    public function pay(Request $request)
    {
        $request->email = Auth::user()->email;
        $request->amount = $request->amount * 100;
        $request->session()->put('payment_amount',$request->amount);
        $request->currency = env('PAYSTACK_CURRENCY_CODE', 'NGN');
        $request->reference = Paystack::genTranxRef();
        $request->session()->put('reference',$request->reference);
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    public function handleGatewayCallback()
    {

        $payment = Paystack::getPaymentData();
        $payment_detalis = json_encode($payment);
        $amount = (float)Session::get('payment_amount');
        if (!empty($payment['data']) && $payment['data']['status'] == 'success') {
            $user = Auth::user();
            $user->balance = $user->balance + $amount;
            $user->save();

            Fund::create([
                'user_id' => $user->id,
                'amount' => $amount,
                'confirm_payment' => 1,
                'payment_code' => Session::get('reference'),
                'reference' => Session::get('reference'),
                'currency' => env('PAYSTACK_CURRENCY_CODE', 'NGN'),
            ]);

            if($user->referrer){
                $percent_earned =  (15 / 100) * $amount;

                $referrer = User::where('id',$user->referrer_id)->first();
                if($referrer){
                    $referrer->ref_bonus = $referrer->ref_bonus + $percent_earned;
                    $referrer->save();

                    $this->store_ref_earning($referrer->id, 'referral deposit', $amount);
                }
            }
        }
        Session::forget(['payment_amount','reference']);

        return redirect()->route('user.fund')->with('success','Payment successful');

    }

}
