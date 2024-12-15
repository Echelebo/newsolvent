<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lothiancreditonline.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2024 08:18:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('/')}}/lothian/assets/css/main.css">
    <link rel="stylesheet" href="{{url('/')}}/lothian/assets/css/aos.css">
    <link rel="stylesheet" href="{{url('/')}}/lothian/assets/fonts/fontawesome-free-6.2.0-web/css/all.css">
    <link rel="icon" href="{{ url('/') }}/asset/{{ $logo->image_link2 }}">
    <title>{{ $title }} | {{ $set->site_name }}</title>
    <!-- Smartsupp Live Chat script -->

</head>
<body>
    <div class="header" style="position: relative; background: #ffffff;">
            <div class="left">
                <div id="mobile-icon"><i class="fa-solid fa-bars"></i></div>
                <a href="/"><img src="{{ url('/') }}/asset/{{ $logo->image_link }}" class="logo" alt="logo"></a>
            </div>

            <div class="right">
                <a id="hide-mobile" href="{{route('contacts')}}" style="color: #18ab71;"><i class="fa-solid fa-location-dot"></i>Email Us</a>

            </div>

    </div>


    @yield('content')

    <script>
        function redirectToRegister() {
            console.log("Button clicked");
            window.location.href = '/register';
        }
        function toggleEye(){
            var passInput = document.getElementById('password');
            var eyeIcon = document.getElementById('eye');
            if (passInput.type === 'password') {
                passInput.type = 'text';
                eyeIcon.innerHTML = '<i class="fa fa-eye-slash"></i>';
            } else {
                passInput.type = 'password';
                eyeIcon.innerHTML = '<i class="fa fa-eye"></i>';
            }
        }
    </script>
    <div class="footer2" style="background:#18ab71;">
            <div class="copyright align-center">
                <p class="white">
                    Powered by {{$set->site_name}}  copyright &copy; {{date('Y')}}
                </p>
            </div>
    </div>
       <script src="{{url('/')}}/lothian/assets/js/index.js"></script>
       <script src="{{url('/')}}/lothian/assets/js/aos.js"></script>
       <script>
      AOS.init({
        easing: 'ease-in-out-sine',
        duration: 1000
         });</script>
    </body>

    <!-- Mirrored from lothiancreditonline.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Nov 2024 08:18:46 GMT -->
    </html>