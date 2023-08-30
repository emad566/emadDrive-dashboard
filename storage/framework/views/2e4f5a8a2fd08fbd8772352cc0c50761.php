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
    <link rel="icon" href="<?php echo e(asset('images/favicon.ico')); ?>">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="<?php echo e(asset('admin_login/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style_ar.css')); ?>">
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
                " src="<?php echo e(asset('logo__.png')); ?>" alt="">

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
                            <form action="<?php echo e(route('login')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="contact-top">
                                    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="">
                                    <h5 class="text-secondary fw-3 py-3">
                                        تسجيل الدخول  </h5>
                                </div>
                                <?php if(Session::get('error')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo e(Session::get('error')); ?>

                                    </div>
                                <?php endif; ?>
                                <?php if(Session::get('success')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(Session::get('success')); ?>

                                    </div>
                                <?php endif; ?>
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
                                <?php echo csrf_field(); ?>
                                <div class="contact-top">
                                    <img src="<?php echo e(asset('images/logo.png')); ?>" alt="">
                                    <h5 class="text-secondary fw-3 py-3">
                                        اعادة تعين كلمة المرور  </h5>
                                </div>


                                <?php if(Session::get('error')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo e(Session::get('error')); ?>

                                    </div>
                                <?php endif; ?>
                                <?php if(Session::get('success')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(Session::get('success')); ?>

                                    </div>
                                <?php endif; ?>
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
        
    </section>
    <!-- ***** Welcome Area End ***** -->
</div>


<!-- ***** All jQuery Plugins ***** -->

<!-- jQuery(necessary for all JavaScript plugins) -->
<script src="<?php echo e(asset('admin_login/assets/js/jquery/jquery.min.js')); ?>"></script>

<!-- Bootstrap js -->
<script src="<?php echo e(asset('admin_login/assets/js/bootstrap/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_login/assets/js/bootstrap/bootstrap.min.js')); ?>"></script>

<!-- Plugins js -->
<script src="<?php echo e(asset('admin_login/assets/js/plugins/plugins.min.js')); ?>"></script>

<!-- Active js -->
<script src="<?php echo e(asset('admin_login/assets/js/active.js')); ?>"></script>
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
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/auth/login.blade.php ENDPATH**/ ?>