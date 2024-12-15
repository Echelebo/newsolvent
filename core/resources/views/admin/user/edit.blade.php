@extends('master')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Update account information</h6>
                </div>
                <div class="card-body">
                        <form action="{{url('admin/profile-update')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Username:</label>
                            <div class="col-lg-10">
                                <input type=""hidden value="{{$client->id}}" name="id">
                                <input type="text" name="username" class="form-control" value="{{$client->username}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">First Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="name" class="form-control" value="{{$client->name}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Last Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="lastname" class="form-control" value="{{$client->lastname}}" required>
                            </div>
                        </div>
                        <!--<div class="form-group row">
                            <label class="col-form-label col-lg-2">COT Status:</label>
                            <div class="col-lg-10 id_100">
                                <select name="cotstatus" class="form-control" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">IMF Status:</label>
                            <div class="col-lg-10 id_100">
                                <select name="imfstatus" class="form-control" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">TAX Status:</label>
                            <div class="col-lg-10 id_100">
                                <select name="taxstatus" class="form-control" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>-->

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Account Pin:</label>
                            <div class="col-lg-10">

                                <input type="number" name="pin" class="form-control" value="{{$client->pin}}" required>
                            </div>
                        </div>








                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Transfer Status:</label>
                            <div class="col-lg-10 trans">
                                <select name="trans_status" class="form-control" required>
                                    <option value="0">Banned Account</option>
                                    <option value="1">Successful Transfer</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Email:</label>
                            <div class="col-lg-10">
                                <input type="email" name="email" class="form-control" readonly value="{{$client->email}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Mobile:</label>
                            <div class="col-lg-10">
                                <input type="text" name="mobile" class="form-control" value="{{$client->phone}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Date Of Birth:</label>
                            <div class="col-lg-10">
                                <input type="date" name="dob" class="form-control" value="{{$client->dob}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Country:</label>
                            <div class="col-lg-10">
                                <input type="text" name="country" class="form-control" value="{{$client->country}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">City:</label>
                            <div class="col-lg-10">
                                <input type="text" name="city" class="form-control" value="{{$client->city}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Ledger Pending:</label>
                            <div class="col-lg-10">
                                <input type="text" name="ledger" class="form-control" value="{{$client->ledger}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Zip Code:</label>
                            <div class="col-lg-10">
                                <input type="text" name="zip_code" class="form-control" value="{{$client->zip_code}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Account Type:</label>
                            <div class="col-lg-10">
                                <input type="text" name="account_type" class="form-control" value="{{$client->account_type}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Address:</label>
                            <div class="col-lg-10">
                                <input type="text" name="address" class="form-control" value="{{$client->address}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Balance:</label>
                            <div class="col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">{{$currency->name}}</span>
                                    </span>
                                    <input type="number" name="balance" max-length="10" value="{{$client->balance}}" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Status<span class="text-danger">*</span></label>
                            <div class="col-lg-10">
                                <div class="form-check form-check-inline form-check-switchery">
                                    <label class="form-check-label">
                                        @if($client->email_verify==1)
                                            <input type="checkbox" name="email_verify" class="form-check-input-switchery" value="1" checked>
                                        @else
                                            <input type="checkbox" name="email_verify" class="form-check-input-switchery" value="1">
                                        @endif
                                        Email verification
                                    </label>
                                </div>
                                <div class="form-check form-check-inline form-check-switchery">
                                    <label class="form-check-label">
                                        @if($client->phone_verify==1)
                                            <input type="checkbox" name="phone_verify" class="form-check-input-switchery" value="1" checked>
                                        @else
                                            <input type="checkbox" name="phone_verify" class="form-check-input-switchery" value="1">
                                        @endif
                                        Account Verification
                                    </label>
                                </div>
                                <div class="form-check form-check-inline form-check-switchery">
                                    <label class="form-check-label">
                                        @if($client->upgrade==1)
                                            <input type="checkbox" name="upgrade" class="form-check-input-switchery" value="1" checked>
                                        @else
                                            <input type="checkbox" name="upgrade" class="form-check-input-switchery" value="1">
                                        @endif
                                        Account upgrade
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn bg-dark">Update<i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-img-actions d-inline-block mb-3">
                        <img class="img-fluid rounded-circle" src="{{url('/')}}/asset/profile/{{$client->image}}" width="120" height="120" alt="">
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                        <div>
                            <ul class="list list-unstyled mb-0">
                                <li>Joined: <span class="font-weight-semibold">{{date("Y/m/d h:i:A", strtotime($client->created_at))}}</span></li>
                                <li>Last Login: <span class="font-weight-semibold">{{date("Y/m/d h:i:A", strtotime($client->last_login))}}</span></li>
                                <li>Last Updated: <span class="font-weight-semibold">{{date("Y/m/d h:i:A", strtotime($client->updated_at))}}</span></li>
                                <li>IP Address: <span class="font-weight-semibold">{{$client->ip_address}}</span></li>
                                <li>Account no: <span class="font-weight-semibold">{{$client->acct_no}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($bnk))
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Loan bank details</h6>
                </div>
                <div class="card-body">
                    <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                        <div>
                            <ul class="list list-unstyled mb-0">
                                <li>Bank name: <span class="font-weight-semibold">{{$bnk->name}}</span></li>
                                <li>Address: <span class="font-weight-semibold">{{$bnk->address}}</span></li>
                                <li>iban: <span class="font-weight-semibold">{{$bnk->iban}}</span></li>
                                <li>Swift: <span class="font-weight-semibold">{{$bnk->swift}}</span></li>
                                <li>Account no: <span class="font-weight-semibold">{{$bnk->acct_no}}</span></li>
                                <li>Account name: <span class="font-weight-semibold">{{$bnk->acct_name}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if($set->kyc==1)
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Kyc verification</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    @if($client->kyc_status==0)
                                        Unverified
                                    @else
                                        Verified
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if(!empty($client->kyc_link))
                                        <a href="{{url('/')}}/asset/profile/{{$client->kyc_link}}">View</a>
                                    @else
                                        No file
                                    @endif
                                </td>
                                <td class="text-center">
                                @if($client->kyc_status!=1)
                                    @if(!empty($client->kyc_link))
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class='dropdown-item' href ="{{url('/')}}/admin/approve-kyc/{{$client->id}}"><i class="icon-eye mr-2"></i>Approve</a>
                                                <a class='dropdown-item' href ="{{url('/')}}/admin/reject-kyc/{{$client->id}}"><i class="icon-eye-blocked2 mr-2"></i>Reject</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="card">
    <div class="card-body">
                                <form action="{{url('admin/save-password')}}" method="post">
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Change Password:</label>
                                        <div class="col-lg-4">
                                            <input type="text" name="password" class="form-control">
                                            <input type="hidden" name="id" value="{{$client->id}}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn bg-dark">Change Password<i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>
                            </div>
                            </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs justify-content-center nav-tabs-highlight nav-justified">
                        <li class="nav-item"><a href="#basic-tab3" class="nav-link active" data-toggle="tab">Credit account</a></li>
                        <li class="nav-item"><a href="#basic-tab4" class="nav-link" data-toggle="tab">Debit account</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="basic-tab3">
                            <div class="card-body">
                                <form action="{{url('admin/credit-account')}}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Amount:</label>
                                        <div class="col-lg-10">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text">{{$currency->name}}</span>
                                                </span>
                                                <input type="number" name="amount" step="any" max-length="10" class="form-control">
                                                <input type="hidden" value="{{$client->id}}" name="id">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Account Name:</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="sender_acctname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Account Number:</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="sender_acctno" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Bank Name:</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="sender_bankname" class="form-control">
                                        </div>
                                    </div>
                                   <!-- <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Description:</label>
                                        <div class="col-lg-10">
                                            <textarea type="text" name="content" class="form-control"></textarea>
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Date:</label>
                                        <div class="col-lg-10">
                                            <input type="datetime-local" name="dates" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Description:</label>
                                        <div class="col-lg-10">
                                            <textarea type="text" name="content" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn bg-dark">Update<i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="basic-tab4">
                            <div class="card-body">
                                <form action="{{url('admin/debit-account')}}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Amount:</label>
                                        <div class="col-lg-10">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <span class="input-group-text">{{$currency->name}}</span>
                                                </span>
                                                <input type="number" name="amount" step="any" max-length="10" class="form-control">
                                                <input type="hidden" value="{{$client->id}}" name="id">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Account Name:</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="sender_acctname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Account Number:</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="sender_acctno" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Bank Name:</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="sender_bankname" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Date:</label>
                                        <div class="col-lg-10">
                                            <input type="datetime-local" name="dates" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Description:</label>
                                        <div class="col-lg-10">
                                            <textarea type="text" name="content" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn bg-dark">Update<i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Account statement</h6>
                </div>
                <div class="">
                    <table class="table datatable-show-all">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Amount</th>
                                <th>Details</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($transfer as $k=>$val)
                            <tr>
                                <td>{{++$k}}.</td>
                                <td>{{number_format($val->amount).$currency->name}}</td>
                                <td>{{$val->details}}</td>
                                <td>
                                    @if($val->type==2)
                                        <span class="badge badge-success">Credit</span>
                                    @elseif($val->type==1)
                                        <span class="badge badge-info">Debit</span>
                                    @endif
                                </td>
                                <td>
                                    @if($val->status==0)
                                        <span class="badge badge-danger">Pending</span>
                                    @elseif($val->status==1)
                                        <span class="badge badge-success">Successful</span>
                                    @endif
                                </td>
                                <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>
                                <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a data-toggle="modal" data-target="#{{$val->id}}deletes" class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>
                                                     <a href="https://grandfirmcreditbk.com/banking/asset/imftax/{{$val->imfimage}}" target="_blank" class="dropdown-item"><i class="icon-cogs mr-2"></i>View IMF Doc</a>
                                                     <a href="https://grandfirmcreditbk.com/banking/asset/imftax/{{$val->taximage}}" target="_blank" class="dropdown-item"><i class="icon-cogs mr-2"></i>View Tax Doc</a>

                                                    @if($val->imf_verify == 0)
                                                     <a data-toggle="modal" data-target="#{{$val->id}}diimf" class="dropdown-item"><i class="icon-cogs mr-2"></i>Approve IMF Doc</a>
                                                    @endif
                                                    @if($val->tax_verify == 0)
                                                    <a data-toggle="modal" data-target="#{{$val->id}}ditax" class="dropdown-item"><i class="icon-cogs mr-2"></i>Approve Tax Doc</a>
                                                    @endif
                                                     @if($val->cot_verify == 0)
                                                     <a data-toggle="modal" data-target="#{{$val->id}}dicot" class="dropdown-item"><i class="icon-cogs mr-2"></i>Ignore COT Code</a>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <div id="{{$val->id}}deletes" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="font-weight-semibold">Are you sure you want to delete this?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            <a  href="{{url('/')}}/admin/transferx/delete/{{$val->id}}" class="btn bg-danger">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="{{$val->id}}dipin" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="font-weight-semibold">Are you sure you want to deactivate Activation code?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            <a  href="{{url('/')}}/admin/transferx/dipin/{{$val->id}}" class="btn bg-danger">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="{{$val->id}}enpin" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="font-weight-semibold">Are you sure you want to activate Pin Code?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            <a  href="{{url('/')}}/admin/transferx/enpin/{{$val->id}}" class="btn bg-danger">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="{{$val->id}}dicot" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="font-weight-semibold">Are you sure you want to deactivate COT code?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            <a  href="{{url('/')}}/admin/transferx/dicot/{{$val->id}}" class="btn bg-danger">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="{{$val->id}}encot" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="font-weight-semibold">Are you sure you want to activate COT code?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            <a  href="{{url('/')}}/admin/transferx/encot/{{$val->id}}" class="btn bg-danger">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="{{$val->id}}diimf" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="font-weight-semibold">Are you sure you want to Approve IMF Document?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            <a  href="{{url('/')}}/admin/transferx/diimf/{{$val->id}}" class="btn bg-danger">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="{{$val->id}}enimf" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="font-weight-semibold">Are you sure you want to activate IMF code?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            <a  href="{{url('/')}}/admin/transferx/enimf/{{$val->id}}" class="btn bg-danger">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="{{$val->id}}ditax" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="font-weight-semibold">Are you sure you want to Approve Tax Document?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            <a  href="{{url('/')}}/admin/transferx/ditax/{{$val->id}}" class="btn bg-danger">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="{{$val->id}}entax" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="font-weight-semibold">Are you sure you want to activate Tax code?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            <a  href="{{url('/')}}/admin/transferx/entax/{{$val->id}}" class="btn bg-danger">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Bank transfer</h6>
                </div>
                <div class="">
                    <table class="table datatable-show-all">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($bank as $k=>$val)
                            <tr>
                                <td>{{++$k}}.</td>
                                <td>{{number_format($val->amount).$currency->name}}</td>
                                <td>
                                    @if($val->status==0)
                                        <span class="badge badge-danger">Pending</span>
                                    @elseif($val->status==1)
                                        <span class="badge badge-success">Approved</span>
                                    @endif
                                </td>
                                <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>
                                <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                            @if($val->status==0)
                                                <a class='dropdown-item' href="{{url('/')}}/admin/approvebk/{{$val->id}}"><i class="icon-thumbs-up3 mr-2"></i>Approve request</a>
                                            @endif
                                                <a data-toggle="modal" data-target="#{{$val->id}}delete" class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>
                                                <a data-toggle="modal" data-target="#{{$val->id}}screenshot" class="dropdown-item"><i class="icon-image2 mr-2"></i>Screenshot</a>
                                                <a data-toggle="modal" data-target="#{{$val->id}}details" class="dropdown-item"><i class="icon-share2 mr-2"></i>Transfer details</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <div id="{{$val->id}}delete" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="font-weight-semibold">Are you sure you want to delete this?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            <a  href="{{url('/')}}/admin/bank_transfer/delete/{{$val->id}}" class="btn bg-danger">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="{{$val->id}}details" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <h6 class="font-weight-semibold">{{$val->details}}</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="{{$val->id}}screenshot" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img src="{{url('/')}}/asset/screenshot/{{$val->image}}" style="height:auto;max-width:100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @if($set->loan==1)
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">logs</h6>
                    </div>
                    <div class="">
                        <table class="table datatable-show-all">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Ref</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($loan as $k=>$val)
                                <tr>
                                    <td>{{++$k}}.</td>
                                    <td>{{$val->user->name}}</td>
                                    <td>{{number_format($val->amount).$currency->name}}</td>
                                    <td>{{$val->reference}}</td>
                                    <td>
                                        @if($val->status==0)
                                            <span class="badge badge-info">Under review</span>
                                        @elseif($val->status==1)
                                            <span class="badge badge-info">Funds disbursed, awaiting payback</span>
                                        @elseif($val->status==2)
                                            <span class="badge badge-info">Loan payed</span>
                                        @endif
                                    </td>
                                    <td>{{$val->details}}</td>
                                    <td>{{date("Y/m/d h:i:A", strtotime($val->created_at))}}</td>
                                    <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a data-toggle="modal" data-target="#{{$val->id}}delete" class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>
                                                    @if($val->status==0)
                                                        <a class='dropdown-item' href="{{url('/')}}/admin/loan-approve/{{$val->id}}"><i class="icon-thumbs-up3 mr-2"></i>Approve loan</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <div id="{{$val->id}}delete" class="modal fade" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="font-weight-semibold">Are you sure you want to delete this?</h6>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                                <a  href="{{url('/')}}/admin/loan/delete/{{$val->id}}" class="btn bg-danger">Proceed</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Ticket</h6>
                </div>
                <div class="">
                    <table class="table datatable-show-all">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Username</th>
                                <th>Priority</th>
                                <th>Ticket ID</th>
                                <th>Status</th>
                                <th>Subject</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($ticket as $k=>$val)
                            <tr>
                                <td>{{++$k}}.</td>
                                <td>{{$val->user->username}}</td>
                                <td>{{$val->priority}}</td>
                                <td>{{$val->ticket_id}}</td>
                                <td>
                                    @if($val->status==0)
                                        <span class="badge badge-info">Open</span>
                                    @elseif($val->status==1)
                                        <span class="badge badge-danger">Closed</span>
                                    @elseif($val->status==2)
                                        <span class="badge badge-success">Resolved</span>
                                    @endif
                                </td>
                                <td>{{$val->subject}}</td>
                                <td>{{date("Y/m/d", strtotime($val->date))}}</td>
                                <td>{{date("Y/m/d h:i:A", strtotime($val->updated_at))}}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class='dropdown-item' href="{{url('/')}}/admin/manage-ticket/{{$val->id}}"><i class="icon-bubbles5 mr-2"></i>Manage ticket</a>
                                                @if($val->status==0)
                                                    <a class='dropdown-item' href="{{url('/')}}/admin/close-ticket/{{$val->id}}"><i class="icon-eye-blocked2 mr-2"></i>Close ticket</a>
                                                @endif
                                                <a data-toggle="modal" data-target="#{{$val->id}}delete" class="dropdown-item"><i class="icon-bin2 mr-2"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <div id="{{$val->id}}delete" class="modal fade" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <h6 class="font-weight-semibold">Are you sure you want to delete this?</h6>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                            <a  href="{{url('/')}}/admin/ticket/delete/{{$val->id}}" class="btn bg-danger">Proceed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$("div.id_100 select").val("<?php echo $client->code_status; ?>");
$("div.trans select").val("<?php echo $client->trans_status; ?>");
$("div.id_101 select").val("<?php echo $client->pin_status; ?>");
$("div.id_102 select").val("<?php echo $client->cot_status; ?>");
$("div.id_103 select").val("<?php echo $client->imf_status; ?>");
$("div.id_104 select").val("<?php echo $client->tax_status; ?>");
$("div.id_105 select").val("<?php echo $client->first_verify; ?>");
$("div.id_106 select").val("<?php echo $client->second_verify; ?>");
$("div.id_107 select").val("<?php echo $client->third_verify; ?>");
$("div.id_108 select").val("<?php echo $client->fourth_verify; ?>");
</script>

@stop
