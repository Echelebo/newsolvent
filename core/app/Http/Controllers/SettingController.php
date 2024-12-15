<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Settings;
use App\Models\Admin;
use App\Models\Etemplate;
use Carbon\Carbon;
use Image;


class SettingController extends Controller
{

    public function Settings()
    {
        $data['title']='General settings';
        return view('admin.settings.basic-setting', $data);
    }

    public function Email()
    {
        $data['title']='Email settings';
        $data['val']=Etemplate::first();
        return view('admin.settings.email', $data);
    }

    public function EmailUpdate(Request $request)
    {
        $data = Etemplate::findOrFail(1);
        $data->esender=$request->sender;
        $data->emessage=$request->message;
        $res=$data->save();
        if ($res) {
            return back()->with('success', 'Update was Successful!');
        } else {
            return back()->with('alert', 'An error occured');
        }
    }

    public function Account()
    {
        $data['title']='Change account details';
        $data['val']=Admin::first();
        return view('admin.settings.account', $data);
    }

    public function AccountUpdate(Request $request)
    {
        $data = Admin::findOrFail(1);
        $data->username=$request->username;
        $data->password=Hash::make($request->password);
        $res=$data->save();
        if ($res) {
            return back()->with('success', 'Update was Successful!');
        } else {
            return back()->with('alert', 'An error occured');
        }
    }

    public function Sms()
    {
        $data['title']='Sms settings';
        $data['val']=Etemplate::first();
        return view('admin.settings.sms', $data);
    }

    public function SmsUpdate(Request $request)
    {
        $data = Etemplate::findOrFail(1);
        $data->twilio_sid=$request->twilio_sid;
        $data->twilio_auth=$request->twilio_auth;
        $data->twilio_number=$request->twilio_number;
        $res=$data->save();
        if ($res) {
            return back()->with('success', 'Update was Successful!');
        } else {
            return back()->with('alert', 'An error occured');
        }
    }

    public function createuser()
    {
        $data['title']='Create User';
        $data['val']='';
        return view('admin.settings.createuser', $data);
    }

    public function createuserupdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|min:5|unique:users|regex:/^\S*$/u',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4',
            'pin' => 'required|string|min:4',
        ]);
        if ($validator->fails()) {
            // adding an extra field 'error'...
            $data['title']='Create User';
            $data['errors']=$validator->errors();
            return view('admin.settings.createuser', $data);
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


        $user = new User();
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->city = $request->city_state;
        $user->account_type = $request->account_type;
        $user->dob = $request->dob;
        $user->email = $request->email;
        $user->phone = $request->phone;
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
        $res=$user->save();

        if ($res) {
            return back()->with('success', 'User Created Successfully!');
        } else {
            return back()->with('alert', 'An error occured');
        }



        /* if ($basic->email_verification == 1) {
            $text = "Your Email Verification Code Is: <b>$user->verification_code</b>";
            send_email($user->email, $user->name, 'Email verification', $text);
        }
       /* if ($basic->sms_verification == 1) {
            $message = "Your phone verification code is: $user->sms_code";
            send_sms($user->phone, strip_tags($message));
        } */
        /*if ($basic->email_notify == 1) {
            $text = 'We wish to inform you that your Online Banking Registration Profile has been created successfully and your login details have been kept confidential and secured. <br /><br />Have a nice banking experience. <br /><br /><p style="background-color: #6A3433; color: #ffffff;">BELOW ARE YOUR BANKING DETAILS</p>Email Address: '.$user->email.'<br />Account Number: '.$user->acct_no;
            send_email($user->email, $user->name, 'Welcome Email', $text);
        }
        if ($basic->sms_notify == 1) {
            $message = "<b>Welcome to Arab Credit Union <b/> <br/><br/> We wish to inform you that your Online Banking Registration Profile has been created successfully. Check your email for more details";
            send_sms($user->phone, strip_tags($message));
        } */
    }

    public function SettingsUpdate(Request $request)
    {
        $data = Settings::findOrFail(1);
        $data->site_name=$request->site_name;
        $data->tawk_id=$request->tawk_id;
        $data->email=$request->email;
        $data->csemail=$request->csemail;
        $data->mobile=$request->mobile;
        $data->title=$request->title;
        $data->transfer_charge=$request->transfer_charge;
        $data->transfer_chargex=$request->transfer_chargex;
        $data->balance_reg=$request->bal;
        $data->upgrade_fee=$request->upgrade_fee;
        $data->loan_interest=$request->loan_interest;
        $data->saving_interest=$request->saving_interest;
        $data->saving_charge=$request->saving_charge;
        $data->withdraw_charge=$request->withdraw_charge;
        $data->merchant_charge=$request->merchant_charge;
        $data->collateral_percent=$request->collateral_percent;
        $data->site_desc=$request->site_desc;
        $data->address=$request->address;
        $data->api=$request->api;
        $data->gradient1=$request->gradient1;
        $data->gradient2=$request->gradient2;
        if(empty($request->kyc)){
            $data->kyc=0;
        }else{
            $data->kyc=$request->kyc;
        }
        if(empty($request->email_activation)){
            $data->email_verification=0;
        }else{
            $data->email_verification=$request->email_activation;
        }
        if(empty($request->sms_activation)){
            $data->sms_verification=0;
        }else{
            $data->sms_verification=$request->sms_activation;
        }
        if(empty($request->email_notify)){
            $data->email_notify=0;
        }else{
            $data->email_notify=$request->email_notify;
        }
        if(empty($request->sms_notify)){
            $data->sms_notify=0;
        }else{
            $data->sms_notify=$request->sms_notify;
        }
        if(empty($request->registration)){
            $data->registration=0;
        }else{
            $data->registration=$request->registration;
        }
        if(empty($request->loan)){
            $data->loan=0;
        }else{
            $data->loan=$request->loan;
        }
        if(empty($request->save)){
            $data->save=0;
        }else{
            $data->save=$request->save;
        }
        if(empty($request->auto)){
            $data->auto=0;
        }else{
            $data->auto=$request->auto;
        }
        if(empty($request->asset)){
            $data->asset=0;
        }else{
            $data->asset=$request->asset;
        }
        if(empty($request->merchant)){
            $data->merchant=0;
        }else{
            $data->merchant=$request->merchant;
        }
        $res=$data->save();
        if ($res) {
            return back()->with('success', 'Update was Successful!');
        } else {
            return back()->with('alert', 'An error occured');
        }
    }
}
