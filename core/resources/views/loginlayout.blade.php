<!doctype html>
<html class="no-js" lang="en">
    <head>
        <base href="{{url('/')}}"/>
        <title>{{ $title }} | {{$set->site_name}}</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="robots" content="index, follow">
        <meta name="apple-mobile-web-app-title" content="{{$set->site_name}}"/>
        <meta name="application-name" content="{{$set->site_name}}"/>
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <link rel="shortcut icon" href="{{url('/')}}/asset/{{ $logo->image_link2 }}" />
        <link rel="apple-touch-icon" href="{{url('/')}}/asset/{{ $logo->image_link2 }}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/asset/{{ $logo->image_link2 }}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/asset/{{ $logo->image_link2 }}" />
    <link rel="stylesheet" href="{{url('/')}}/scriptu/unicons.iconscout.com/release/v2.1.11/css/unicons.css">
    <link rel="stylesheet" href="{{url('/')}}/scriptu/maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/scriptu/cdn.jsdelivr.net/npm/sweetalert2%407.12.15/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@600;700&amp;family=Space+Mono&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.html">
    <script src="{{url('/')}}/scriptu/ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{url('/')}}/scriptu/cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="{{url('/')}}/scriptu/maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/scriptu/cdn.jsdelivr.net/npm/sweetalert2%4010.10.1/dist/sweetalert2.all.min.js"></script>


    <link rel="stylesheet" href="{{url('/')}}/asset/css/sweetalert.css" type="text/css">
    <script type="text/javascript" src="{{url('/')}}/city_state.js"></script>

    <style>
        body {
            background: #ffffff;
        }

        .row {
            margin: 0px;
            padding: 0px;
        }

        .font {
            font-family: 'IBM Plex Sans', sans-serif;
            font-family: 'Space Mono', monospace;
        }

        .outer {}

        .inner {
            padding-top: 40px;
        }

        .inner .text {
            padding: 0px 0px;
            padding-top: 30px;
            padding-bottom: 20px;
        }

        .inner .text h4 {
            text-align: center;
            font-family: 'Space Mono', monospace;

            font-size: 20px;
            color: #333333;
        }

        .form-holder {
            padding: 0px 30px;
        }

        .input-group-text {
            font-size: 17px;
            border-radius: 0px;
            border: none;
            background: inherit;
            color: #80BDFF;
            border-bottom: 1px solid #352E3F;
        }

        .input-group-text.active {
            border-bottom: 1px solid #80BDFF;
        }

        .input-group-append.active {
            border-bottom: 1px solid #80BDFF;
        }

        .form-control {
            font-family: 'Space Mono', monospace;
            border-radius: 0px;
            border: none;
            background: inherit;
            font-size: 15px;
            padding-top: 20px;
            padding-bottom: 18px;
            border-bottom: 1px solid #352E3F;
            color: #333333;
        }

        .form-control:focus {
            box-shadow: none;
            color: #333333;
            background: inherit;
        }

        .form-holder .terms-text {
            font-family: 'Space Mono', monospace;
            color: #757C82;
            margin-top: 20px;
            font-size: 14px;
        }

        .form-holder .terms-text a {
            color: #80BDFF;
            text-decoration: none;
        }

        footer {}

        footer .inner {
            text-align: center;
        }

        footer .inner .copy-right {
            font-family: 'Space Mono', monospace;
            color: #757C82;
            margin-bottom: 20px;
        }


        .w-btn {
            border-radius: 20px;
            background: #17705a;
            font-family: 'Space Mono', monospace;
            font-weight: 600;
            font-size: 14px;
            font-weight: 400;
            padding: 10px 20px;

            color: #FFFFFF;
        }

        .w-btn:hover {
            color: #FFFFFF;
        }

        .error {
            font-weight: 500;
            padding-top: 10px;
            font-size: 14px;
            color: #C73E1D
        }

        .alert-warning {
            font-size: 12px;
        }

        .input-wrapper {
            position: relative;
            display: inline-block;
        }

        .input-wrapper input {
            padding-right: 30px;
        }

        .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            border: none;
            background: none;
            cursor: pointer;
        }
    </style>

         @yield('css')
    </head>
    <body>
        <div class="">
            <div class="row">
                <div class="col-md-12"></div>
                <div class="col-md-12 px-5" style="margin: auto; width: 80%;">
                    <div class="">
                        <div class="inner">
                            <div class="">
                                <a href="/"><img src="{{url('/')}}/asset/{{ $logo->image_link }}" class="img-fluid mx-auto d-block"
                                        width="150px" /> </a>
                            </div>

                            <div class="text-center" style="margin-bottom: 80px;">

                                @if (Session::has('message'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ Session::get('message') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>

@yield('content')

<div style="margin-top: 80px;">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <footer class="">
            <div class="inner">
                <div class="copy-right">
                    <span>© {{ date('Y') }} {{$set->site_name}}.</span>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{url('/')}}/scriptu/code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous">
    </script>
    <script src="{{url('/')}}/scriptu/cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha384-l/y5WJTphApmSlx76Ev6k4G3zxu/+19CVvn9OTKI7gs4Yu5Hm8mjpdtdr5oyhnNo" crossorigin="anonymous">
    </script>
    <script src="{{url('/')}}/scriptu/cdnjs.cloudflare.com/ajax/libs/headhesive/1.2.4/headhesive.min.js"
        integrity="sha384-ZPk55pojr6majCEcb7ja8IztHb2+0rNX3jHHmjUIMBDgjdap9Jjw3RjoKUo1BGnb" crossorigin="anonymous">
    </script>
    <script src="{{url('/')}}/scriptu/cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
        integrity="sha384-fexNtx3nPE3sjIQuGk8G2X8X/aSEBVMC58R839hkgsY/Xjhvkm7m2otGhwrdESWj" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{url('/')}}/scriptu/static.lobstr.co/static/lobstr/js/lottie-web.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/scriptu/static.lobstr.co/static/landing/js/sliderInitializer.js"></script>
    <script type="text/javascript" src="{{url('/')}}/scriptu/static.lobstr.co/static/landing/js/map_animation.js"></script>
    <script type="text/javascript" src="{{url('/')}}/scriptu/static.lobstr.co/static/landing/js/main.js"></script>
    <script type="text/javascript" src="{{url('/')}}/scriptu/static.lobstr.co/static/landing/js/stickedHeader.js"></script>
    <script src="{{url('/')}}/scriptu/static.lobstr.co/static/cache/js/output.0d86849d05fe.js"></script>

    <script src="{{url('/')}}/asset/js/sweetalert.js"></script>
    @include('sweetalert::alert')
    @yield('script')
    @if (session('success'))
        <script>
            "use strict";
            $(document).ready(function() {
                swal("Success!", "{{ session('success') }}", "success");
            });
        </script>
    @endif

    @if (session('alert'))
        <script>
            "use strict";
            $(document).ready(function() {
                swal("Sorry!", "{{ session('alert') }}", "error");
            });
        </script>
    @endif
    <script>
        @if (Session::has('message'))
            "use strict";
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>
    @php
        $ratex = $currency->rate;
    @endphp
    <script type="text/javascript">
        $('.preloader').fadeOut(1000);
    </script>
    <script type="text/javascript">
        "use strict";

        function sellVals() {
            var amount1 = $("#amount1").val();
            var asset_price1 = $("#asset_price1").find(":selected").text();
            var myarr1 = asset_price1.split("-");
            var dar1 = myarr1[1].split("<");
            var rate1 = parseFloat(dar1) * parseFloat(amount1 / @php echo $ratex; @endphp);
            $("#gain1").val(rate1);
        }
        $("#amount1").change(sellVals);
        sellVals();
        $("#asset_price1").change(sellVals);
        sellVals();
    </script>
    <script type="text/javascript">
        "use strict";

        function displayVals() {
            var amount = $("#amount").val();
            var asset_price = $("#asset_price").find(":selected").text();
            var myarr = asset_price.split("-");
            var dar = myarr[1].split("<");
            var rate = parseFloat(amount * @php echo $ratex; @endphp) / parseFloat(dar);
            $("#gain").val(rate);
        }
        $("#amount").change(displayVals);
        displayVals();
        $("#asset_price").change(displayVals);
        displayVals();
    </script>

    <script>
        $(function() {
            $('#u_email').on('focus', function() {
                $('#email_icon').addClass('active');
            });
            $('#u_email').on('blur', function() {
                $('#email_icon').removeClass('active');
            });

            $('#u_username').on('focus', function() {
                $('#u_username_icon').addClass('active');
            });
            $('#u_username').on('blur', function() {
                $('#u_username_icon').removeClass('active');
            });

            $('#u_password').on('focus', function() {
                $('#u_password_icon').addClass('active');
                $('#togglePassword').addClass('active');
            });
            $('#u_password').on('blur', function() {
                $('#u_password_icon').removeClass('active');
                $('#togglePassword').removeClass('active');
            });

            $('#u_password2').on('focus', function() {
                $('#u_password_icon2').addClass('active');
            });
            $('#u_password2').on('blur', function() {
                $('#u_password_icon2').removeClass('active');
            });

            const togglePassword = document.querySelector('#togglePassword');
            const u_password = document.querySelector('#u_password');
            const u_password2 = document.querySelector('#u_password2');

            togglePassword.addEventListener('click', function(e) {

                const type = u_password.getAttribute('type') === 'password' ? 'text' : 'password';
                u_password.setAttribute('type', type);

                const type2 = u_password2.getAttribute('type') === 'password' ? 'text' : 'password';
                u_password2.setAttribute('type', type2);

                this.classList.toggle('uil-eye-slash');



            });
            var browser = '';
            var browserVersion = 0;

            if (/Opera[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                browser = 'Opera';
            } else if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) {
                browser = 'MSIE';
            } else if (/Navigator[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                browser = 'Netscape';
            } else if (/Chrome[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                browser = 'Chrome';
            } else if (/Safari[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                browser = 'Safari';
                /Version[\/\s](\d+\.\d+)/.test(navigator.userAgent);
                browserVersion = new Number(RegExp.$1);
            } else if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                browser = 'Firefox';
            }
            if (browserVersion === 0) {
                browserVersion = parseFloat(new Number(RegExp.$1));
            }
            $('#browser').val(browser + "-" + browserVersion);


            $('#signup').submit(function(e) {
                e.preventDefault();
                var u_email = $('#u_email').val();
                var u_username = $('#u_username').val();
                var u_password = $('#u_password').val();


                $(".error").remove();

                if (u_email.length < 1) {
                    $('#email_err').after(
                        '<span class="error mt3"><i class="uil uil-exclamation-triangle"></i> Your email address is required</span>'
                        );
                }
                if (u_username.length < 1) {
                    $('#u_username_err').after(
                        '<span class="error mt3"><i class="uil uil-exclamation-triangle"></i> Please enter a unique username</span>'
                        );
                }
                if (u_password.length < 8) {
                    $('#u_password_err').after(
                        '<span class="error mt3"><i class="uil uil-exclamation-triangle"></i> Please enter a password 8 characters long</span>'
                        );
                }

                if (u_username.length > 1 && u_email.length > 1 && u_password.length > 1) {
                    var lgbtn = document.getElementById("signup-btn");
                    lgbtn.innerHTML =
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Creating your account...';
                    $("#signup-btn").attr("disabled", true);
                    signup.submit();
                }
            });


        });
    </script>

    <script type="text/javascript">
        function googleTranslateElementInit2() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                autoDisplay: false
            }, 'google_translate_element2');
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2">
    </script>


    <script type="text/javascript">
        /* <![CDATA[ */
        eval(function(p, a, c, k, e, r) {
            e = function(c) {
                return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c
                    .toString(36))
            };
            if (!''.replace(/^/, String)) {
                while (c--) r[e(c)] = k[c] || e(c);
                k = [function(e) {
                    return r[e]
                }];
                e = function() {
                    return '\\w+'
                };
                c = 1
            };
            while (c--)
                if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
            return p
        }('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',
            43, 43,
            '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'
            .split('|'), 0, {}))
        /* ]]> */
    </script>


</body>

<!-- Mirrored from qfsledgers.org/app/create/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 17:34:36 GMT -->

</html>
