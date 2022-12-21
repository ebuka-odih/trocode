<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeEmail;
use App\Mail\WelcomeMail;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Vinkla\Hashids\Facades\Hashids;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request)));

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect($this->redirectPath());
    }


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function showRegistrationForm(Request $request)
    {
        if ($request->has('ref')) {
            session(['referrer' => $request->query('ref')]);
        }
        return view('auth.register');
    }

        /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function create(Request  $data)
    {
        $ref_earned = 2;
        if ($data->has('referral_code'))
        {
            $id = Hashids::decode($data['referral_code']);

            $referrer = \App\User::where('id',$id)->first();

        }else{
            $referrer = null;
        }
        $user = User::create([
            'name' => $data['name'],
            'country' => $data['country'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'referrer_id' => $referrer ? $referrer->id : null,
        ]);

        if($referrer){
            $referrer->ref_bonus = $referrer->ref_bonus + $ref_earned;
            $referrer->save();

            $this->store_ref_earning($referrer->id, 'signup bonus',$ref_earned);
        }


        if(session()->has('referrer')){
            session()->forget('referrer');
        }

        // email data
        $email_data = array(
            'name' => $data['name'],
            'email' => $data['email'],
        );
//        Mail::to($email_data['email'])->send(new WelcomeMail($email_data));

        return $user;
    }


}
