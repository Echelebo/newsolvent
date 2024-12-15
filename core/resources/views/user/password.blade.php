@extends('userlayout')

@section('content')
    <!-- Page content -->
    <main class="page-content" style="margin-top:40px">
        <div class="container-fluid mt--6">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-x">
                            <div class="card-header-x header-elements-inline">
                                <h3 class="mb-0">
                                    <font size="2px">Change Password</font>
                                </h3>
                            </div>
                            <div class="card-body-x">
                                <form action="{{ route('change.password') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">Old</font>
                                        </label>
                                        <div class="col-lg-10">
                                            <input type="password" name="current_password" class="form-control" required>
                                            @if ($errors->has('current_password'))
                                                <span class="error form-error-msg ">
                                                    {{ $errors->first('current_password') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">New</font>
                                        </label>
                                        <div class="col-lg-10">
                                            <input type="password" name="password" class="form-control" required>
                                            @if ($errors->has('password'))
                                                <span class="error form-error-msg ">
                                                    {{ $errors->first('password') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">Confirm</font>
                                        </label>
                                        <div class="col-lg-10">
                                            <input type="password" name="password_confirmation" class="form-control"
                                                required>
                                            @if ($errors->has('password_confirmation'))
                                                <span class="error form-error-msg ">
                                                    {{ $errors->first('password_confirmation') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn" style="background-color: #17705a; color: #ffffff;">
                                            <font size="2px">Submit</font>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <br />
                <div class="row">
                    <div class="col-md-8">
                        <!-- Basic layout-->
                        <div class="card-x">
                            <div class="card-header-x header-elements-inline">
                                <h3 class="mb-0">
                                    <font size="2px">Change Activation Code</font>
                                </h3>
                            </div>

                            <div class="card-body-x">
                                <form action="{{ route('change.pin') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">Old</font>
                                        </label>
                                        <div class="col-lg-10">
                                            <input type="password" name="current_pin" class="form-control" required>
                                            @if ($errors->has('current_pin'))
                                                <span class="error form-error-msg ">
                                                    {{ $errors->first('current_pin') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">New</font>
                                        </label>
                                        <div class="col-lg-10">
                                            <input type="password" name="pin" class="form-control" required>
                                            @if ($errors->has('pin'))
                                                <span class="error form-error-msg ">
                                                    {{ $errors->first('pin') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">Confirm</font>
                                        </label>
                                        <div class="col-lg-10">
                                            <input type="password" name="pin_confirmation" class="form-control" required>
                                            @if ($errors->has('pin_confirmation'))
                                                <span class="error form-error-msg ">
                                                    {{ $errors->first('pin_confirmation') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn" style="background-color: #17705a; color: #ffffff;">
                                            <font size="2px">Submit</font>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /basic layout -->
                    </div>
                </div>

            </div>
        </div>
    </main>
@stop
