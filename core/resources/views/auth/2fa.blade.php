@extends('loginslayout')
@section('css')

@stop
@section('content')
<div class="reg-container" style="background: transparent url('{{url('/')}}/lothian/assets/img/hd/coworkers-working-computer.jpg') center center no-repeat; background-size: cover; background-attachment: fixed; height: 100vh;">

    <div class="login">
        <div class="content">
                        <h3 class="align-center white">Account Login Confirmation</h3>
            <p style="text-align: left; color: var(--white-color)">Check your email for login code!!! </p>
            <form action="{{ route('submitfa') }}" method="post">
                @csrf
                <span class="input-container">
                    @if ($errors->has('password'))
                                            <p style="color: #DC1414;">
                                                {{ $errors->first('password') }}
                                            </p>
                                        @endif
                    <input type="text" name="code" id="u_password" placeholder="Enter Code" style="border-bottom: 2px solid #18ab71;><i class="details fa-regular fa-circle-user"></i></span>
                <span class="input-container">



                <p><a class="white align-right" href="{{ route('2fa') }}">Resend Code?</a></p>
                <button type="submit" class="submit-button white" style="background-color: #18ab71;">Proceed</button>

            </form>
        </div>
    </div>
</div>

@stop