<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <base href="../../../../">
    <meta charset="utf-8" />
    <title>AtmoDrive | {{__("Login")}}</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{asset('dashboardassets/assets/css/pages/login/classic/login-3.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('dashboardassets/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboardassets/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('dashboardassets/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{asset('dashboardassets/assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('dashboardassets/assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('dashboardassets/assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboardassets/assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{asset('dashboardassets/assets/media/logos/favicon.ico')}}" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
                style="background-image: url({{asset('dashboardassets/assets/media/bg/bg-1.jpg')}});">
                <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="{{route('login')}}">
                            <img src="{{asset('assets/images/logo.png')}}" class="max-h-100px" alt="AtmoDrive" />
                        </a>
                    </div>
                    <!--end::Login Header-->
                    <!--begin::Login Sign in form-->
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3>Change The World</h3>
                        </div>
                        @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 underline btn btn-success">Dashboard</a>
                            @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline btn btn-primary">Login</a>

                            <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif -->
                            @endauth
                        </div>
                        @endif

                    </div>
                    <!--end::Login Sign in form-->


                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>

    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
