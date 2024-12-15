@extends('loginslayout')
@section('css')

@stop
@section('content')
<div class="reg-container" style="background: transparent url('{{url('/')}}/lothian/assets/img/hd/coworkers-working-computer.jpg') center center no-repeat; background-size: cover; background-attachment: fixed; height: 100vh;">

    <div class="login">
        <div class="content">
                        <h3 class="align-center white">Welcome to {{$set->site_name}} Internet Banking </h3>
            <p style="text-align: left; color: var(--white-color)">Sign in with your Internet Banking details. Not registered on Internet Banking? Click on register to get started</p>
            <form action="{{ route('submitlogin') }}" method="post">
                @csrf
                <span class="input-container">
                    @if ($errors->has('acct_no'))
                                            <p style="color: #DC1414;">
                                                {{ $errors->first('acct_no') }}
                                            </p>
                                        @endif
                    <input type="text" name="acct_no" id="email" placeholder="Email/Username/Acct Number" style="border-bottom: 2px solid #18ab71;><i class="details fa-regular fa-circle-user"></i></span>
                <span class="input-container">@if ($errors->has('password'))
                    <p style="color: #DC1414;">
                        {{ $errors->first('password') }}
                    </p>
                @endif<input type="password" name="password" id="password" placeholder="Password" style="border-bottom: 2px solid #18ab71;""><i class="details fa fa-fingerprint"></i><span class="eye" id="eye" onclick="toggleEye()"><i class="fa fa-eye-slash"></i></span></span>

                <p><a class="white align-right" href="{{ route('user.password.request') }}">Forgot Password?</a></p>
                <button type="submit" class="submit-button white" style="background-color: #18ab71;">Proceed</button>
                <p class="white" style="text-align: center;">Don't have an account yet?</p>
                <a type="button" href="{{route('register')}}" class="submit-blue align-center white">Create an account <i class="fa-solid fa-arrow-right-long"></i></a>
            </form>
        </div>
    </div>
</div>

@stop
