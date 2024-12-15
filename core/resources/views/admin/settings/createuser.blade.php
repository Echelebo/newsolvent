@extends('master')

@section('content')
<div class="content"> 
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title font-weight-semibold">Create New User</h6>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.createuser.update')}}" enctype="multipart/form-data" method="post">
                    @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">First Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="name" value="" class="form-control" required>
                            </div>
                        </div>                         
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Last Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="lastname" value="" class="form-control" required>
                            </div>
                        </div>                         
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Username:</label>
                            <div class="col-lg-10">
                                @if ($errors->has('username'))
                             <p style="color: #DC1414">
                              {{ $errors->first('username') }}
                              </p>
                              @endif
                                <input type="text" name="username" value="" class="form-control" required>
                            </div>
                        </div>     
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Email:</label>
                            <div class="col-lg-10">
                                @if ($errors->has('email'))
                             <p style="color: #DC1414">
                              {{ $errors->first('email') }}
                              </p>
                              @endif
                                <input type="email" name="email" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Country:</label>
                            <div class="col-lg-10">
                                <input type="text" name="country" value="" class="form-control" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">City/State:</label>
                            <div class="col-lg-10">
                                <input type="text" name="city_state" value="" class="form-control" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Zip Code:</label>
                            <div class="col-lg-10">
                                <input type="text" name="zip_code" value="" class="form-control" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Address:</label>
                            <div class="col-lg-10">
                                <input type="text" name="address" value="" class="form-control" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Phone:</label>
                            <div class="col-lg-10">
                                @if ($errors->has('phone'))
                             <p style="color: #DC1414">
                              {{ $errors->first('phone') }}
                              </p>
                              @endif
                                <input type="text" name="phone" value="" class="form-control" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Pin:</label>
                            <div class="col-lg-10">
                                @if ($errors->has('pin'))
                             <p style="color: #DC1414">
                              {{ $errors->first('pin') }}
                              </p>
                              @endif
                                <input type="text" name="pin" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Date Of Birth:</label>
                            <div class="col-lg-10">
                                <input type="date" name="dob" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Account Type:</label>
                            <div class="col-lg-10">
                                <select name="account_type" placeholder="select" class="form-control" required>
                            <option value="" style="background-color: grey; color: #fff!important; font-weight: bold;" selected="selected">ACCOUNT TYPE *</option>
                            <option>-----</option>
                            <option value="Business Account">Business Account</option>
                            <option value="Checking Account">Checking Account</option>
                            <option value="Fixed Deposit Account">Fixed Deposit Account</option>
                            <option value="Savings Account">Savings Account</option>
                            <option value="Current Account">Current Account</option>
                            <option value="Brokerage Account">Brokerage Account</option>
                          </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Passport Photo:</label>
                            <div class="col-lg-10">
                                <input type="file" name="image" class="form-control" accept="image/*" required>
                                <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">Password:</label>
                            <div class="col-lg-10">
                                @if ($errors->has('password'))
                             <p style="color: #DC1414">
                              {{ $errors->first('password') }}
                              </p>
                              @endif
                                <input type="password" name="password" value="" class="form-control" required>
                            </div>
                        </div> 
                    <div class="text-right">
                        <button type="submit" class="btn bg-dark">Submit<i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>    
    </div>
</div>
@stop