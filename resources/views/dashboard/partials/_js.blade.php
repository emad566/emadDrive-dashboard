@php
    $local = session()->get('locale');
    if($local == null ) $local = 'en'
@endphp
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#FFFFFF",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#FFFFFF",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#FFFFFF",
                    "primary": "#FFFFFF",
                    "secondary": "#3F4254",
                    "success": "#FFFFFF",
                    "info": "#FFFFFF",
                    "warning": "#FFFFFF",
                    "danger": "#FFFFFF",
                    "light": "#464E5F",
                    "dark": "#FFFFFF"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
</script>

<!-- alpinejs -->
{{--<script defer src="{{ asset('js/focus.min.js') }}"></script>--}}
{{--<script defer src="{{ asset('js/alpine.min.js') }}"></script>--}}
<!-- /alpinejs -->


<script src="{{ asset('dashboard-assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('dashboard-assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{ asset('dashboard-assets/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('dashboard-assets/js/pages/widgets.js') }}"></script>
<script src="{{ asset('dashboard-assets/js/pages/crud/forms/widgets/bootstrap-select.js') }}"></script>


{{-- lottie json --}}
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

{{-- START:: pikaday --}}
<script defer src="{{ asset('js/moment.js') }}"></script>
<script defer src="{{ asset('js/pikaday.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/pikaday.css') }}">
{{-- END:: pikaday --}}





{{-- toaster --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script defer>
    window.onload= function(){
        // START:: Toast alert listener
        window.addEventListener('alert', event => {
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                @if($local == 'en')
                "positionClass" : "toast-top-right",
                @else
                "positionClass" : "toast-top-left",
                @endif
            }

            toastr[event.detail.type](event.detail.message,
                event.detail.title ?? ''), toastr.options = {
                "closeButton": true,
                "progressBar": true,
                @if($local == 'en')
                "positionClass" : "toast-top-right",
                @else
                "positionClass" : "toast-top-left",
                @endif
            }
        });
        // END:: Toast alert listener
    }
</script>

<style>
    .toast-success{
        background-image: none !important;
        background-color: #f90 !important;
    }
    @if($local == 'ar')
    .toast-close-button{
        margin-left: 34px !important;
        margin-right: 40px !important;
    }
    @endif

    .rotate {
        animation: rotation 1s infinite linear;
    }

    @keyframes rotation {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }
</style>
{{-- /toaster --}}

@livewireScripts
@yield('scripts')
