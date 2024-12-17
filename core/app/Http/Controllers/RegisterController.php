<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Models\User;
use App\Models\Settings;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Image;
use Auth;

use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{

    protected $redirectTo = '/user/dashboard';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function register()
    {
		$data['title']='Register';
		if(Auth::user()){
			return redirect()->intended('user/dashboard');
		}else{
	        return view('/auth/register', $data);
		}
    }


    public function submitregister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|regex:/^\S*$/u',
            'username' => 'required|min:5|unique:users|regex:/^\S*$/u',
            'email' => 'required|string|email|max:255|unique:users|regex:/^\S*$/u',
            'password' => 'required|string|min:2',
            'pin' => 'required|string|min:4',


        ]);
        if ($validator->fails()) {
            // adding an extra field 'error'...
            $data['title']='Register';
            $data['errors']=$validator->errors();
            return view('/auth/register', $data);
        }

        $basic = Settings::first();

        if ($basic->email_verification == 1) {
            $email_verify = 0;
        } else {
            $email_verify = 1;
        }

        if ($basic->sms_verification == 1) {
            $phone_verify = 0;
        } else {
            $phone_verify = 1;
        }
        $verification_code = strtoupper(Str::random(6));
        $sms_code = strtoupper(Str::random(6));
        $email_time = Carbon::parse()->addMinutes(5);
        $phone_time = Carbon::parse()->addMinutes(5);
        $acct='2'.rand(1, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9);

        $image = $request->file('image');
        $filename = time() . '_' . $request->username . '.jpg';
        $location = 'asset/profile/' . $filename;
        Image::make($image)->resize(800, 800)->save($location);

        $strr = $request->phonexx;
        $strr = strval($strr);
        $strr = ltrim($strr, "0");
        $phonec = $request->phonec;
        $phonec = strval($phonec);
        $phone = $phonec.$strr;

        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->city = $request->city_state;
        $user->account_type = $request->account_type;
        $user->email = $request->email;
        $user->phone = $phone;
        $user->username = $request->username;
        $user->email_verify = $email_verify;
        $user->verification_code = $verification_code;
        $user->sms_code = $sms_code;
        $user->pin = $request->pin;
        $user->email_time = $email_time;
        $user->phone_verify = $phone_verify;
        $user->phone_time = $phone_time;
        $user->balance = $basic->balance_reg;
        $user->ip_address = user_ip();
        $user->zip_code = $request->zip_code;
        $user->acct_no = $acct;
        $user->password = Hash::make($request->password);
        $user->image=$filename;
        $user->save();



        if ($basic->email_verification == 1) {
            $text = "Your Email Verification Code Is: <b>$user->verification_code</b>";

            $objDemo = new \stdClass();
            $objDemo->message = $text;
            $objDemo->sender = $basic->site_name;
            $objDemo->date = \Carbon\Carbon::Now();
            $objDemo->subject = "Email verification";
            $objDemo->name = $user->name;

            Mail::to($user->email)->send(new NewNotification($objDemo));
        }
       /* if ($basic->sms_verification == 1) {
            $message = "Your phone verification code is: $user->sms_code";
            send_sms($user->phone, strip_tags($message));
        } */
        if ($basic->email_notify == 1) {
            $text = 'We wish to inform you that your Online Banking Registration Profile has been created successfully and your login details have been kept confidential and secured. <br><br>Have a nice banking experience. <br /><p style="background-color: #6A3433; color: #ffffff;">BELOW ARE YOUR BANKING DETAILS</p>Email Address: '.$user->email.'<br />Account Number: '.$user->acct_no;

            $objDemo = new \stdClass();
            $objDemo->message = $text;
            $objDemo->sender = $basic->site_name;
            $objDemo->date = \Carbon\Carbon::Now();
            $objDemo->subject = "Welcome to $basic->name";
            $objDemo->name = $user->name;

            Mail::to($user->email)->send(new NewNotification($objDemo));

        }
        if ($basic->sms_notify == 1) {
            $message = "Welcome To Grand Firm Credit Bank, We wish to inform you that your Online Banking Registration Profile has been created successfully. Check your email for more details";
            send_sms($user->phone, strip_tags($message));
        }
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) {

            return redirect()->intended('user/dashboard');
        }
    }
}
