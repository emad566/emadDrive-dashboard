<!doctype html>
<html class="no-js" lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title> تسجيل الدخول </title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('admin_login/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style_ar.css')}}">
    <style>
        p,h1,h2,h3,h4,h5,h6,div,a,p,li,span,button,label,td,input,.btn{
            font-family: 'Tajawal', sans-serif;
        }
        .forc_ar{
            font-family: 'Tajawal', sans-serif;
        }
    </style>
</head>

<body class="homepage-5 accounts">
<!--====== Scroll To Top Area Start ======-->
<div id="scrollUp" title="Scroll To Top">
    <i class="fas fa-arrow-up"></i>
</div>
<!--====== Scroll To Top Area End ======-->

<div class="main">
    <!-- ***** Header Start ***** -->

    <!-- ***** Header End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section id="home" class="section welcome-area bg-overlay d-flex align-items-center">

        <div class="container" style="position: relative">
            <img style="position: absolute;
                top: -65px;
                height: 48px;
                right: 1%;
                " src="{{asset('logo__.png')}}" alt="">

            <div class="row RTL align-items-center justify-content-center" dir="rtl">
                <!-- Welcome Intro Start -->
                <div class="col-12 col-lg-7">
                    <div class="welcome-intro text-right">
                        <h1 class="text-white">إدارة الموقع</h1>
                        <p class="text-white my-4" style="width: 85%;line-height: 40px;
                            font-size: 19px;">
                            - يمكنك تسجيل الدخول اذا كنت من قسم الدعم. <br>
                            - يمكنك تسجيل الدخول اذا كنت من شركائنا.<br>
                            - يمكنك تسجيل الدخول اذا كنت هيرو له متابعين.<br>
                        </p>
                    </div>

                </div>
                <div class="col-12 col-md-8 col-lg-5">
                    <!-- Contact Box -->
                    <div>
                        <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg login-signin">
                            <!-- Contact Form -->
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="contact-top">
                                    <img src="{{asset('assets/images/logo.png')}}" alt="">
                                    <h5 class="text-secondary fw-3 py-3">
                                        تسجيل الدخول  </h5>
                                </div>
                                @if (Session::get('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif
                                @if (Session::get('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-sign-in-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" name="email" placeholder="البريد الالكتروني  ... " required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend hide" onclick="show_password($(this))">
                                                    <span class="input-group-text"><i class="fas fa-unlock " ></i></span>
                                                </div>
                                                <input type="password" class="form-control" name="password"
                                                       placeholder="كلمة السر ... " required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-bordered w-100 mt-3 mt-sm-4" type="submit">تسجيل الدخول</button>

                                    </div>

                                </div>
                            </form>
                            <a onclick="show_section($(this))" href="javascript:void(0)" data-id=".forget_password" class=" font-weight-bold opacity-90 px-15 py-3">نسيت كلمة المرور</a>

                            <p class="form-message"></p>
                        </div>
                        <div class="contact-box bg-white text-center rounded p-4 p-sm-5 mt-5 mt-lg-0 shadow-lg forget_password d-none">
                            <!-- Contact Form -->
                            <form action="" method="post">
                                @csrf
                                <div class="contact-top">
                                    <img src="{{asset('images/logo.png')}}" alt="">
                                    <h5 class="text-secondary fw-3 py-3">
                                        اعادة تعين كلمة المرور  </h5>
                                </div>


                                @if (Session::get('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif
                                @if (Session::get('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-sign-in-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" value="" :value="old('email')" name="email" placeholder="البريد الالكتروني  ... " required="required">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-bordered w-100 mt-3 mt-sm-4" type="submit">اعادة تعين</button>

                                    </div>

                                </div>
                            </form>
                            <a onclick="show_section($(this))" href="javascript:void(0)" data-id=".login-signin" class=" font-weight-bold opacity-90 px-15 py-3">العودة لتسجيل الدخول</a>

                            <p class="form-message"></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- Shape Bottom -->
        {{-- <div class="shape-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path class="shape-fill" fill="#FFFFFF" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7  c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4  c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
            </svg>
        </div> --}}
    </section>
    <!-- ***** Welcome Area End ***** -->
</div>


<!-- ***** All jQuery Plugins ***** -->

<!-- jQuery(necessary for all JavaScript plugins) -->
<script src="{{asset('admin_login/assets/js/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap js -->
<script src="{{asset('admin_login/assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('admin_login/assets/js/bootstrap/bootstrap.min.js')}}"></script>

<!-- Plugins js -->
<script src="{{asset('admin_login/assets/js/plugins/plugins.min.js')}}"></script>

<!-- Active js -->
<script src="{{asset('admin_login/assets/js/active.js')}}"></script>
<script>
    function show_password(element){
        if($(element).hasClass("hide")){
            $(element).siblings("input").attr("type","text")

        }else{
            $(element).siblings("input").attr("type","password")
        }
        $(element).toggleClass("hide")
        $(element).find("i").toggleClass("fa-unlock-alt")

    }
    function show_section(element){

        $($(element).data('id')).siblings().addClass('d-none');
        $($(element).data('id')).removeClass('d-none')

    }
</script>
</body>
</html>
