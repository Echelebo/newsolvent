@extends('userlayout')

@section('content')

    <!-- Page content -->
    <main class="page-content" style="margin-top:40px">
        <div class="container-fluid mt--6">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-8">

                        <!-- Basic layout-->
                        <div class="card-x">
                            <div class="card-header-x header-elements-inline">
                                <h3 class="mb-0">
                                    <font size="2px">Change transfer activation code</font>
                                </h3>
                            </div>

                            <div class="card-body-x">
                                <form action="{{ route('change.pin') }}" method="post">
                                    <p>
                                        <font size="2px">Don't have activation code? <a
                                                href="mailto: customerservice@wexicocrunion.com.com">Contact Us</a></font>
                                        </code>
                                    </p>
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">
                                            <font size="2px">Old pin:</font>
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
                                            <font size="2px">New pin:</font>
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
                                            <font size="2px">Confirm pin:</font>
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
