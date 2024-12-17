<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use App\Models\Settings;
use App\Models\Logo;
use App\Models\Loan;
use App\Models\Currency;
use App\Models\Alerts;
use App\Models\Transfer;
use App\Models\Int_transfer;
use App\Models\Adminbank;
use App\Models\Gateway;
use App\Models\Card;
use App\Models\Banktransfer;
use App\Models\Contact;
use App\Models\Ticket;
use App\Models\Reply;
use Carbon\Carbon;
use Image;


use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Destroyuser($id)
    {
        $user = User::whereId($id)->delete();
        $int_transfer = Int_transfer::whereUser_id($id)->delete();
        $loan = Loan::whereUser_id($id)->delete();
        $bank_transfer = Banktransfer::whereUser_id($id)->delete();
        $alerts = Alerts::whereUser_id($id)->delete();
        $ticket = Ticket::whereUser_id($id)->delete();
        return back()->with('success', 'User was successfully deleted');
    }

    public function dashboard()
    {
        $data['title']='Dashboard';
        $data['totalusers']=User::count();
        $data['blockedusers']=User::whereStatus(1)->count();
        $data['activeusers']=User::whereStatus(0)->count();
        $data['totalticket']=Ticket::count();
        $data['openticket']=Ticket::whereStatus(0)->count();
        $data['closedticket']=Ticket::whereStatus(1)->count();
        $data['totalbdeposit']=Banktransfer::count();
        $data['approvedbdep']=Banktransfer::whereStatus(1)->count();
        $data['declinedbdep']=Banktransfer::whereStatus(2)->count();
        $data['pendingbdep']=Banktransfer::whereStatus(0)->count();
        $data['totalloan']=Loan::count();
        $data['paidloan']=Loan::whereStatus(2)->count();
        $data['onholdloan']=Loan::whereStatus(0)->count();
        $data['pendingloan']=Loan::whereStatus(1)->count();
        $data['messages']=Contact::count();
        return view('admin.dashboard.index', $data);
    }

    public function Users()
    {
		$data['title']='Clients';
		$data['users']=User::latest()->get();
        return view('admin.user.index', $data);
    }

    public function Loancompleted()
    {
		$data['title']='Completed loan';
		$data['loan']=Loan::whereStatus(2)->get();
        return view('admin.loan.completed', $data);
    }

    public function Loanhold()
    {
		$data['title']='Unapproved loan';
		$data['loan']=Loan::whereStatus(0)->get();
        return view('admin.loan.on-hold', $data);
    }

    public function Loanpending()
    {
		$data['title']='Awaiting payback';
		$data['loan']=Loan::whereStatus(1)->get();
        return view('admin.loan.pending', $data);
    }

    public function Messages()
    {
		$data['title']='Messages';
		$data['message']=Contact::latest()->get();
        return view('admin.user.message', $data);
    }

    public function cards()
    {
		$data['title']='Virtual Cards';
		$data['card']=Card::latest()->get();
		$data['user']=$user=User::all();

        return view('admin.cards.index', $data);
    }

    public function Ticket()
    {
		$data['title']='Ticket system';
		$data['ticket']=Ticket::latest()->get();
        return view('admin.user.ticket', $data);
    }

    public function Email($id,$name)
    {
		$data['title']='Send email';
		$data['email']=$id;
		$data['name']=$name;
        return view('admin.user.email', $data);
    }

    public function Promo()
    {
		$data['title']='Send email';
        $data['client']=$user=User::all();
        return view('admin.user.promo', $data);
    }

    public function Sendemail(Request $request)
    {
        $set=Settings::first();

        $objDemo = new \stdClass();
        	    $objDemo->message = $request->message;
        	    $objDemo->sender = $set->name;
                $objDemo->date = \Carbon\Carbon::Now();
                $objDemo->subject = $request->subject;
                $objDemo->name = $request->name;

        	    Mail::to($request->to)->send(new NewNotification($objDemo));


        $notification = array('message' => 'Mail Sent Successfuly!', 'alert-type' => 'success');
        return back()->with($notification);
    }

    public function Sendpromo(Request $request)
    {
        $set=Settings::first();
        foreach ($request->email as $email) {
            $user=User::whereEmail($email)->first();

            $objDemo = new \stdClass();
        	    $objDemo->message = $request->message;
        	    $objDemo->sender = $set->name;
                $objDemo->date = \Carbon\Carbon::Now();
                $objDemo->subject = $request->subject;
                $objDemo->name = $user->name;

        	    Mail::to($request->to)->send(new NewNotification($objDemo));
        }
        $notification = array('message' => 'Mail Sent Successfuly!', 'alert-type' => 'success');
        return back()->with($notification);
    }

    public function Replyticket(Request $request)
    {
        $data['ticket_id'] = $request->ticket_id;
        $data['reply'] = $request->reply;
        $data['status'] = 0;
        $res = Reply::create($data);
        if ($res) {
            return back();
        } else {
            return back()->with('alert', 'An error occured');
        }
    }

    public function Credit(Request $request)
    {
        $set=Settings::first();
        $user = User::findOrFail($request->id);
        $a=$user->balance+$request->amount;
        $user->balance=round($a,2);
        $user->save();
        $token = round(microtime(true));
        $content='Acct: '.$user->acct_no.', DR Acct: '.$request->sender_acctno.', Sent From: '.$request->sender_acctname.', Bank: '.$request->sender_bankname.', Date: '.$request->dates.', CR Amt: '.number_format($request->amount,2).',
        Bal: '.number_format($a,2).', Ref: '.$token;
        $credit['user_id']=$user->id;
        $credit['amount']=$request->amount;
        $credit['balance']=$user->balance;
        $credit['account']=$user->acct_no;
        $credit['sender_acctno']=$request->sender_acctno;
        $credit['sender_acctname']=$request->sender_acctname;
        $credit['sender_bankname']=$request->sender_bankname;
        $credit['dates']=$request->dates;
        $credit['details']=$content;
        $credit['type']=2;
        $credit['seen']=0;
        $credit['valuex']=1;
        $credit['status']=1;
        $credit['activation_verify']=1;
        $credit['cot_verify']=1;
        $credit['imf_verify']=1;
        $credit['tax_verify']=1;
        $credit['code_count']=4;
        $credit['reference']=$token;
        $res=Alerts::create($credit);
        //if($set->sms_notify==1){
      //     send_sms($user->phone, 'Grand Firm Credit Bank ' . $content);
       // }
       // if($set['email_notify']==1){
       //    send_email($user->email, $user->username, 'Credit alert', $content);
      //  }
        if ($res) {
            return back()->with('success', 'Operation successful');
        } else {
            return back()->with('alert', 'An error occured');
        }
    }

    public function Debit(Request $request)
    {
        $set=Settings::first();
        $user = User::findOrFail($request->id);
        $a=$user->balance-$request->amount;
        $user->balance=round($a,2);
        $user->save();
        $token = round(microtime(true));
        $content='Acct: '.$user->acct_no.', BNF Acct: '.$request->sender_acctno.', BNF Name: '.$request->sender_acctname.', Bank: '.$request->sender_bankname.', Date: '.$request->dates.', DR Amt: '.number_format($request->amount,2).',
        Bal: '.number_format($a,2).', Ref: '.$token;
        $debit['user_id']=$user->id;
        $debit['amount']=$request->amount;
        $debit['dates']=$request->dates;
        $debit['details']=$content;
        $debit['sender_acctno']=$request->sender_acctno;
        $debit['sender_acctname']=$request->sender_acctname;
        $debit['sender_bankname']=$request->sender_bankname;
        $debit['balance']=$user->balance;
        $debit['account']=$user->acct_no;
        $debit['valuex']=1;
        $debit['type']=1;
        $debit['seen']=0;
        $debit['status']=1;
        $debit['activation_verify']=1;
        $debit['cot_verify']=1;
        $debit['imf_verify']=1;
        $debit['tax_verify']=1;
        $debit['code_count']=4;
        $debit['reference']=$token;
        $res=Alerts::create($debit);
        //if($set->sms_notify==1){
        //   send_sms($user->phone, 'Grand Firm Credit Bank ' . $content);
       // }
       // if($set['email_notify']==1){
       //    send_email($user->email, $user->username, 'Debit alert', $content);
        //}
        if ($res) {
            return back()->with('success', 'Operation successful');
        } else {
            return back()->with('alert', 'An error occured');
        }
    }

    public function TransferxDestroy($id)
    {
        $data = Alerts::findOrFail($id);
            $res =  $data->delete();
            if ($res) {
                return back()->with('success', 'Request was Successfully deleted!');
            } else {
                return back()->with('alert', 'Problem With Deleting Request');
            }
    }

    public function SavePassword(Request $request)
    {
        $data = User::findOrFail($request->id);;
        $data->password = Hash::make($request->password);
            $res =  $data->save();
            if ($res) {
                return back()->with('success', 'Password Succesffully Changed!');
            } else {
                return back()->with('alert', 'Problem With Changing Password');
            }
    }

    public function TransferxDipin($id)
    {
        $data = Alerts::findOrFail($id);
        $data->activation_verify = 1;
        $data->code_count = $data->code_count + 1;
            $res =  $data->save();
            if ($res) {
                return back()->with('success', 'Pin Code Succesffully Deactivated!');
            } else {
                return back()->with('alert', 'Problem With Deactivating Pin Code');
            }
    }

    public function TransferxDicot($id)
    {
        $data = Alerts::findOrFail($id);
        $data->cot_verify = 1;

            $res =  $data->save();
            if ($res) {
                return back()->with('success', 'COT Code Succesffully Deactivated!');
            } else {
                return back()->with('alert', 'Problem With Deactivating COT Code');
            }
    }

    public function TransferxDiimf($id)
    {
        $set=Settings::first();
        $data = Alerts::findOrFail($id);
        $user = User::findOrFail($data->user_id);
        if($user->first_verify == 'token'){
            $data->status = 1;
        }
        $data->imf_verify = 1;
            $res =  $data->save();
            $user = User::findOrFail($data->user_id);

            if ($res) {

           $objDemo = new \stdClass();
        	    $objDemo->message = "This is to inform you that your Verification Document has been approved.";
        	    $objDemo->sender = $set->name;
                $objDemo->date = \Carbon\Carbon::Now();
                $objDemo->subject = "Document Approved";
                $objDemo->name = $user->name;

        	    Mail::to($user->email)->send(new NewNotification($objDemo));

                return back()->with('success', 'IMF Doc Succesffully Approved!');
            } else {
                return back()->with('alert', 'Problem With Approving IMF Doc');
            }
    }

    public function TransferxDitax($id)
    {
        $set=Settings::first();
        $data = Alerts::findOrFail($id);
        $data->tax_verify = 1;
        $data->status = 1;
            $res =  $data->save();
            $user = User::findOrFail($data->user_id);
            if ($res) {

           $objDemo = new \stdClass();
        	    $objDemo->message = "This is to inform you that your Verification Document has been approved.";
        	    $objDemo->sender = $set->name;
                $objDemo->date = \Carbon\Carbon::Now();
                $objDemo->subject = "Document Approved";
                $objDemo->name = $user->name;

        	    Mail::to($user->email)->send(new NewNotification($objDemo));

                return back()->with('success', 'TAX Doc Succesffully Approved!');
            } else {
                return back()->with('alert', 'Problem With Approving TAX Doc');
            }
    }

    public function TransferxEnpin($id)
    {
        $data = Alerts::findOrFail($id);
        $data->activation_verify = 0;
        $data->code_count = $data->code_count - 1;
            $res =  $data->save();
            if ($res) {
                return back()->with('success', 'PIN Code Succesffully Activated!');
            } else {
                return back()->with('alert', 'Problem With Activating PIN Code');
            }
    }

    public function TransferxEncot($id)
    {
        $data = Alerts::findOrFail($id);
        $data->cot_verify = 0;
        $data->code_count = $data->code_count - 1;
            $res =  $data->save();
            if ($res) {
                return back()->with('success', 'COT Code Succesffully Activated!');
            } else {
                return back()->with('alert', 'Problem With Activating COT Code');
            }
    }

    public function TransferxEnimf($id)
    {
        $data = Alerts::findOrFail($id);
        $data->imf_verify = 0;
        $data->code_count = $data->code_count - 1;
            $res =  $data->save();
            if ($res) {
                return back()->with('success', 'IMF Code Succesffully Activated!');
            } else {
                return back()->with('alert', 'Problem With Activating IMF Code');
            }
    }

    public function TransferxEntax($id)
    {
        $data = Alerts::findOrFail($id);
        $data->tax_verify = 0;
        $data->code_count = $data->code_count - 1;
            $res =  $data->save();
            if ($res) {
                return back()->with('success', 'TAX Code Succesffully Activated!');
            } else {
                return back()->with('alert', 'Problem With Activating TAX Code');
            }
    }

    public function Destroymessage($id)
    {
        $data = Contact::findOrFail($id);
        $res =  $data->delete();
        if ($res) {
            return back()->with('success', 'Request was Successfully deleted!');
        } else {
            return back()->with('alert', 'Problem With Deleting Request');
        }
    }

    public function Destroyticket($id)
    {
        $data = Ticket::findOrFail($id);
        $res =  $data->delete();
        if ($res) {
            return back()->with('success', 'Request was Successfully deleted!');
        } else {
            return back()->with('alert', 'Problem With Deleting Request');
        }
    }

    public function UpdateCards($id)
    {
        $data['card']=$card=Card::find($id);
        $data['title']=$card->user_id->username;
        return view('admin.cards.edit', $data);
    }

    public function Managecard($id, $user_id)
    {
        $data['card']=$card=Card::find($id);
        $data['user_id']=$user=$user_id;
        $data['title']='Update Virtual Card';

        return view('admin.cards.edit', $data);
    }

    public function Manageuser($id)
    {
        $data['client']=$user=User::find($id);
        $data['title']=$user->name;
        $data['bank']=Banktransfer::whereUser_id($user->id)->orderBy('id', 'DESC')->get();
        $data['transfer']=Alerts::whereUser_id($user->id)->orderBy('id', 'DESC')->get();
        $data['loan']=Loan::whereUser_id($user->id)->orderBy('id', 'DESC')->get();
        $data['ticket']=Ticket::whereUser_id($user->id)->orderBy('id', 'DESC')->get();
        return view('admin.user.edit', $data);
    }

    public function Manageticket($id)
    {
        $data['ticket']=$ticket=Ticket::find($id);
        $data['title']='#'.$ticket->ticket_id;
        $data['client']=User::whereId($ticket->user_id)->first();
        $data['reply']=Reply::whereTicket_id($ticket->ticket_id)->get();
        return view('admin.user.edit-ticket', $data);
    }

    public function Closeticket($id)
    {
        $ticket=Ticket::find($id);
        $ticket->status=1;
        $ticket->save();
        return back()->with('success', 'Ticket has been closed.');
    }

    public function Blockuser($id)
    {
        $user=User::find($id);
        $user->status=1;
        $user->save();
        return back()->with('success', 'User has been suspended.');
    }

    public function Unblockuser($id)
    {
        $user=User::find($id);
        $user->status=0;
        $user->save();
        return back()->with('success', 'User was successfully unblocked.');
    }

    public function Approvekyc($id)
    {
        $user=User::find($id);
        $user->kyc_status=1;
        $user->save();
        return back()->with('success', 'Kyc has been approved.');
    }

    public function Loanapprove($id)
    {
        $loan=Loan::find($id);
        $loan->status=1;
        $loan->save();
        return back()->with('success', 'Loan has been approved.');
    }

    public function Rejectkyc($id)
    {
        $user=User::find($id);
        $user->kyc_status='';
        $user->save();
        return back()->with('success', 'Kyc was successfully rejected.');
    }

    public function Profileupdate(Request $request)
    {
        $data = User::findOrFail($request->id);
        $data->username=$request->username;
        $data->name=$request->name;
        $data->phone=$request->mobile;
        $data->country=$request->country;
        $data->city=$request->city;
        $data->pin=$request->pin;
        $data->trans_status=$request->trans_status;
        $data->zip_code=$request->zip_code;
        $data->account_type=$request->account_type;
        $data->lastname=$request->lastname;
        $data->ledger=$request->ledger;
        $data->dob=$request->dob;
        $data->address=$request->address;
        $data->balance=$request->balance;
        if(empty($request->email_verify)){
            $data->email_verify=0;
        }else{
            $data->email_verify=$request->email_verify;
        }
        if(empty($request->phone_verify)){
            $data->phone_verify=0;
        }else{
            $data->phone_verify=$request->phone_verify;
        }
        if(empty($request->upgrade)){
            $data->upgrade=0;
        }else{
            $data->upgrade=$request->upgrade;
        }
        $res=$data->save();
        if ($res) {
            return back()->with('success', 'Update was Successful!');
        } else {
            return back()->with('alert', 'An error occured');
        }
    }

    public function Cardupdate(Request $request)
    {

        $data = Card::findOrFail($request->id);
        $data->subject=$request->subject;
        $data->user_id=$request->user_id;
        $data->cardtype=$request->cardtype;
        $data->cardoption=$request->cardoption;
        $data->status=$request->status;
        $data->cardnumber=$request->cardnumber;
        $data->cardpin=$request->cardpin;
        $data->cardcvv=$request->cardcvv;
        $data->exmonth=$request->exmonth;
        $data->exyear=$request->exyear;
        $data->cardbal=$request->cardbal;
        $data->descrip=$request->descrip;
        $res=$data->save();
        if ($res) {
            return back()->with('success', 'Update was Successful!');
        } else {
            return back()->with('alert', 'An error occured');
        }
    }

    public function Ledgerupdate(Request $request)
    {
        $data = User::findOrFail($request->id);
        $data->ledger=$request->ledger;
        $res=$data->save();
        if ($res) {
            return back()->with('success', 'Amount Added Successful!');
        } else {
            return back()->with('alert', 'An error occured');
        }
    }

    public function LoanDestroy($id)
    {
        $data = Loan::findOrFail($id);
            $res =  $data->delete();
            if ($res) {
                return back()->with('success', 'Request was Successfully deleted!');
            } else {
                return back()->with('alert', 'Problem With Deleting Request');
            }
    }

    public function logout()
    {
        Auth::guard()->logout();
        session()->flash('message', 'Just Logged Out!');
        return redirect('/admin');
    }

}
