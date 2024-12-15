@extends('loginlayout')
@section('css')

@stop
@section('content')
<section class="" style="background-color: #fff; margin-top: 5%">
                <div class="container">
                    <div class="row"
                        style="background-color: #f7f7f7; border-top: 1px solid #d6d6d6; padding-top: 3%">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class=""
                                        style="font-family: 'Roboto Condensed', sans-serif; font-weight: lighter; color: #012169; float: left;">
                                        <big>Recover Password</big>
                                    </h4>

                                    <p class=""
                                        style="font-family: 'Roboto Condensed', sans-serif; font-weight: lighter; color: #6b5e51; clear: both;">
                                        <big>Welcome. Recover your password in just minutes.</big>
                                    </p>
                                    <hr style="border: 1px solid #d6d6d6; clear: both;">
                                    <br>

                                    <br>


                                    <p class=""
                                        style="font-family: 'Gothic A1', sans-serif; font-weight: lighter; color: #012169; clear: both;">
                                        <big style="font-size: 22px; font-weight: 600">Please provide your email address
                                            to recover your password</big>
                                    </p>

                                    <div>
                                        <form action="{{ route('user.password.email') }}" method="post"
                                            data-saasone="contact-froms">
                                            @csrf
                                            <div class="form-group row">
                                                <div class="col-sm-3"></div>
                                                @if ($errors->has('email'))
                                                    <p style="color: #DC1414">
                                                        {{ $errors->first('email') }}
                                                    </p>
                                                @endif
                                                <div class="col-sm-6" style="height: 3.25rem;">

                                                    <input style="height: 3.25rem; border-radius: 0px"
                                                        class="reg-form form-control" type="email" name="email"
                                                        placeholder="Email" required>
                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>

                                            <div class="form-group row" style="margin-top: 5%">
                                                <div class="col-md-12">
                                                    <center>
                                                        <button type="submit" class="btn btn-sm w-btn">SEND
                                                            LINK</button>
                                                    </center>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>


@stop



