@props([
    'wrapperClass' => '',
    'imgClass' => '',
    'src' => '',
    'title' => '',
])

<div class="d-flex flex-column flex-center {{$wrapperClass}}">
    <!--begin::Image-->
    <div><img class="{{ $imgClass }}" src="{{$src}}" alt="{{$title}}"></div>
    <!--end::Image-->
    <!--begin::Text-->
    <div class="font-weight-bold text-dark-50 font-size-sm pt-4">{{$title}}</div>
    <!--end::Text-->
</div>
