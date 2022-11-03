<?php

namespace App\Http\Controllers;

use App\Fund;
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
        $request->currency = env('PAYSTACK_CURRENCY_CODE', 'NGN');
        $request->reference = Paystack::genTranxRef();
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    public function handleGatewayCallback()
    {

        $payment = Paystack::getPaymentData();
        $payment_detalis = json_encode($payment);
        if (!empty($payment['data']) && $payment['data']['status'] == 'success') {
            return (new WalletController)->wallet_payment_done(Session::get('payment_data'), $payment_detalis);
        }
        Session::forget('payment_data');
        flash(translate('Payment cancelled'))->success();
        return redirect()->route('home');

    }

}
