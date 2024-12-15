<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use App\Models\Settings;
use App\Models\Currency;
use App\Models\Int_transfer;
use App\Models\Transfer;
use App\Models\Alerts;
use Carbon\Carbon;

use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;

class TransferController extends Controller
{

    public function Ownbank()
    {
        $data['title']='Own bank transfer';
        $data['transfer']=Transfer::latest()->get();
        return view('admin.transfer.own-bank', $data);
    }     
    
    public function Otherbank()
    {
        $data['title']='Other bank transfer';
        $data['transfer']=Int_transfer::latest()->get();
        return view('admin.transfer.other-bank', $data);
    } 
    
    
    public function Destroyownbank($id)
    {
        $data = Transfer::findOrFail($id);
        $res =  $data->delete();
        if ($res) {
            return back()->with('success', 'Request was Successfully deleted!');
        } else {
            return back()->with('alert', 'Problem With Deleting Request');
        }
    }     
    
    public function Destroyotherbank($id)
    {
        $data = Int_transfer::findOrFail($id);
        $res =  $data->delete();
        if ($res) {
            return back()->with('success', 'Request was Successfully deleted!');
        } else {
            return back()->with('alert', 'Problem With Deleting Request');
        }
    } 

    public function Approve($id)
    {
        $data = Int_transfer::findOrFail($id);
        $ss = Alerts::whereReference($data->ref_id)->first();
        $data->status=1;
        $ss->status=1;
        $ss->activation_verify=1;
        $ss->cot_verify=1;
        $ss->imf_verify=1;
        $ss->tax_verify=1;
        $ss->code_count=4;
        $ss->save();
        $res=$data->save();
        $set=Settings::first();
        $user=User::find($data->user_id);
        $currency=Currency::whereStatus(1)->first();
        if($set->email_notify==1){
            
             $objDemo = new \stdClass();
        	    $objDemo->message = "Transfer of $data->amount$currency->name has been approved.";
        	    $objDemo->sender = "Solvent Groups";
                $objDemo->date = \Carbon\Carbon::Now();
                $objDemo->subject = "Transfer Request has been approved";
                $objDemo->name = $user->name;
        	    
        	    Mail::to($user->email)->send(new NewNotification($objDemo));
        	    
        	    
            //send_email(
             //   $user->email, 
            //    $user->username, 
           //     'Transfer Request has been approved', 
          //      'Transfer of '.$data->amount.$currency->name.'. has been approved<br>Thanks for working with us.'
          //  );
        }
        if ($res) {
            return back()->with('success', 'Request was Successfully approved!');
        } else {
            return back()->with('alert', 'Problem With Approving Request');
        }
    }
    
    public function Approveown($id)
    {
        $data = Transfer::findOrFail($id);
        $ss = Alerts::whereReference($data->ref_id)->whereType(1)->first();
        $ssx = Alerts::whereReference($data->ref_id)->whereType(2)->first();
        $data->status=1;
        $ss->status=1;
        $ss->activation_verify=1;
        $ss->cot_verify=1;
        $ss->imf_verify=1;
        $ss->tax_verify=1;
        $ss->code_count=4;
        $ss->save();
        $ssx->status=1;
        $ssx->activation_verify=1;
        $ssx->cot_verify=1;
        $ssx->imf_verify=1;
        $ssx->tax_verify=1;
        $ssx->code_count=4;
        $ssx->save();
        $res=$data->save();
        $set=Settings::first();
        $user=User::find($data->sender_id);
        $currency=Currency::whereStatus(1)->first();
        if($set->email_notify==1){
            
             $objDemo = new \stdClass();
        	    $objDemo->message = "Transfer of $data->amount$currency->name has been approved.";
        	    $objDemo->sender = "Solvent Groups";
                $objDemo->date = \Carbon\Carbon::Now();
                $objDemo->subject = "Transfer Request has been approved";
                $objDemo->name = $user->name;
        	    
        	    Mail::to($user->email)->send(new NewNotification($objDemo));
        	    
        	    
           // send_email(
             //   $user->email, 
             //   $user->username, 
             //   'Transfer Request has been approved', 
            //    'Transfer of '.$data->amount.$currency->name.'. has been approved<br>Thanks for working with us.'
           // );
        }
        if ($res) {
            return back()->with('success', 'Request was Successfully approved!');
        } else {
            return back()->with('alert', 'Problem With Approving Request');
        }
    }
    
    
}
