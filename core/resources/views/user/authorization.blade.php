@extends('userlayout')
@section('content')
    <main class="page-content" style="margin-top:40px">
        <div class="container-fluid mt--6">
            <div class="content-wrapper">
                <h1 class="display-211 text-default">
                    @if (Auth::user()->status == 1)
                        <font size="2">Dear Customer, <br />
                            We have discovered suspicious activities in your account because an unauthorized IP address
                            carried a transaction on your account consequently, your account has been flagged by our risk
                            assessment department, kindly visit our nearest branch with your identification card and utility
                            bill to your identity before it can be reactivated. <br />Thank You</font>
                    @else
                        <font size="7"><b>Verify Account</b></font>
                    @endif
                </h1>
                @if (Auth::user()->email_verify == 0)
                    <div class="card222-x">
                        <div class="card-header-x header-elements-inline">
                            <h3 class="mb-0">Verify account</h3>
                        </div>
                        <div class="card-body-x">
                            <form action="{{ route('user.send-emailVcode') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Email</label>
                                    <div class="col-lg-10">
                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                        <input type="text" class="form-control" value="{{ Auth::user()->email }}"
                                            readonly required>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Send code</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-body-x">
                            <form action="{{ route('user.email-verify') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Enter Code</label>
                                    <div class="col-lg-10">
                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                        <input type="text" name="email_code" class="form-control"
                                            placeholder="Verification Code" required>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @elseif(Auth::user()->phone_verify == 0)
                    <div class="card-x">
                        <div class="card-header-x header-elements-inline">
                            <h3 class="mb-0"><a href="mailto:{{$set->csemail}}"><u>
                                        <font color="blue" size="3">Contact Us </font>
                                    </u></a>
                                <font size="3">To Complete Opening Of An Account</font>
                            </h3>
                        </div>


                    </div>
            </div>
        </div>
    </main>
    @endif
@stop
