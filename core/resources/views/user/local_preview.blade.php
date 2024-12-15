@extends('userlayout')

@section('content')
<main class="page-content" style="margin-top:40px">
<div class="container-fluid mt--6">
  <div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="card-x bg-white">
        <div class="card-body-x">

            <h3 class="text-center">Solvent Transfer</h3>
            <h3 class="text-center" style="color: #176f59;">{{$user->Currency}}{{number_format($amount)}}</h3>


            <div class="conspbtw" style="width: 80%; margin: auto;">
                <div class="lefutu">
                    <span>Amount: </span><br />
                <span>Account number: </span><br />
                <span>Name: </span><br />
                <span>Bank Name: </span><br />
                <span>Fee: </span><br />
                <span>Total: </span>
                </div>
                <div class="rightu">
                    <span class="font-weight-semibold">{{$user->Currency}}{{number_format($amount)}}</span><br />
                <span class="font-weight-semibold">{{$acct_no}}</span><br />
                <span class="font-weight-semibold">{{$acct_name}}</span><br />
                <span class="font-weight-semibold">{{$bank}}</span><br />
                <span class="font-weight-semibold">{{$user->Currency}}{{number_format($amount*$set->transfer_charge/100)}}</span><br />
                <span class="font-weight-semibold">{{$user->Currency}}{{number_format($amount+($amount*$set->transfer_charge/100))}}</span>
                </div>
            </div>

            <div class="text-right" style="margin-right: 120px">
                <br />
                <a href="#" data-toggle="modal" data-target="#modal-form" class="btn"
                    style="background-color: #17705a; color: #ffffff;">
                    <font size="2px">Send</font><i class="icon-paperplane ml-2"></i>
                </a>
            </div>

            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
            aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-sm"
                role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card-x bg-white border-0 mb-0">
                            <div class="card-header-x bg-transparent pb-2ß"
                                id="code">
                                <div class="text-dark text-center mt-4 mb-3">
                                    <font size="2px">Enter Amount </font>
                                </div>
                                <div class="text-center text-dark"><i
                                        class="ni ni-key-25 icon-2x"></i></div>
                            </div>

                            <img src="{{url('/')}}/proccess.gif" id="loading"
                                style="display: none;">

                            <div class="card-body-x p-5">
                                <form action="{{route('submit.localpreview')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="acct_no" value="{{$acct_no}}">
                                    <input type="hidden" name="bank" value="{{$bank}}">
                                    <input type="hidden" name="amount" value="{{$amount}}">
                                    <label>Enter your account pin.</label><br>
                                    <div class="form-group row">
                                          <div class="col-lg-10">
                                            <div class="input-group">

                                              <input type="text" name="otp" value="" placeholder="Enter Pin" class="form-control" required>
                                            </div>
                                          </div>
                                        </div><br><br>
                                    <button type="submit" class="btn btn-sm" style="background-color: #17705a; color: #ffffff;">Confirm To Pay</button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </main>
@stop