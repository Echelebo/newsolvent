<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use App\Models\Settings;
use Carbon\Carbon;
use Session;

class LoginController extends Controller
{
        public function __construct()
    {

    }

        public function login()
    {
		$data['title']='Login';
		if(Auth::user()){
		    $user = User::findOrFail(Auth::user()->id);
		    if ($user->fa_status==1){
		        $user->faverify = 0;
		        $user->save();
		    }
			return redirect()->intended('user/dashboard');
		}else{
	        return view('/auth/login', $data);
		}
    }

    public function faverify()
    {
		if(Auth::user()){
            $data['title']='2fa verification';
			return view('/auth/2fa', $data);
		}else{$data['title']='Login';
	        return view('/auth/login', $data);
		}
    }

    public function submitfa(Request $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        $g=$user->otp;

        if($g == $request->code){

            return redirect()->route('user.dashboard');
        }else{
            return back()->with('alert', 'Invalid 2fa.');
        }
    }

        public function submitlogin(Request $request)
    {

        $login = $request->acct_no;

    $user = User::where('email', $login)->orWhere('username', $login)->orWhere('acct_no', $login)->first();

    if (!$user) {
        return redirect()->back()->withErrors(['acct_no' => 'Invalid login credentials']);
    }


        $validator = Validator::make($request->all(), [
            'password' => 'required|min:3'
        ]);
        if($validator->fails()) {
            // adding an extra field 'error'...
            // adding an extra field 'error'...
            $data['title']='Login';
            $data['errors']=$validator->errors();
            return view('/auth/login', $data);
        }



    	if(Auth::attempt(['acct_no' => $request->acct_no,'password' => $request->password,]) || Auth::attempt(['email' => $request->acct_no,'password' => $request->password,]) || Auth::attempt(['username' => $request->acct_no,'password' => $request->password,]) ){
        	$ip_address=user_ip();
        	$user=User::find(Auth::user()->id);
        	$set=$data['set']=Settings::first();
        	if($ip_address!=$user->ip_address & $set['email_notify']==1){
    			send_email($user->email, $user->username, 'Suspicious Login Attempt', 'Sorry your account was just accessed from an unknown IP address<br> ' .$ip_address. '<br>If this was you, please you can ignore this message or reset your account password.');
        	}
	        $user->last_login=Carbon::now();
	        $user->ip_address=$ip_address;
            $user->save();


            $otp = rand(1000, 9000);
         $user=$data['user']=User::find(Auth::user()->id);
            $user->otp=$otp;
        $user->save();

            $text = 'This is your login 2FA <br />2FA: '.$user->otp;
            send_email($user->email, $user->name, 'Login 2FA', $text);
                return redirect()->route('2fa');

        } else {
        	return back()->with('alert', 'Oops! You have entered invalid credentials');
        }

    }

    public function username()
    {
        return 'acct_no';
    }

}
