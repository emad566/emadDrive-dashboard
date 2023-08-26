
<head>
    <base href="">
    <meta charset="utf-8" />
    <title>AtmoDrive | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        @vite('resources/css/app.css')
<<<<<<< HEAD
{{--    <link href="{{asset('build/assets/app-8252cc18.css')}}" rel="stylesheet" type="text/css" />--}}
=======
>>>>>>> s1
    <link href="{{asset('dashboard-assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard-assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard-assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard-assets/css/themes/layout/header/base/light.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard-assets/css/themes/layout/header/menu/light.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard-assets/css/themes/layout/brand/dark.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('dashboard-assets/css/themes/layout/aside/dark.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{asset('dashboard-assets/media/logos/favicon.ico')}}" />
    <script src="{{asset('assets/lightbox/js/lightbox-plus-jquery.min.js')}}"></script>

    {{-- Cairo Font  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400&display=swap" rel="stylesheet">

    <style>
        body, html {
            font-family: 'Cairo', sans-serif;
        }
    </style>
    {{-- /Cairo Font  --}}

    @livewireStyles
</head>
@yield('styles')
<style>
    #load {
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 9999;
        background:url("{{asset('assets/icons/spinner.gif')}}") no-repeat center center rgba(0, 0, 0, 0.25)
    }
</style>
