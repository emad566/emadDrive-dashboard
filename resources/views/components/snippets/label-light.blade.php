@props([
    'size'=>'lg',
    'mode'=>'light-warning',
])

<span class="label label-{{ $size }} label-{{ $mode }} label-inline">{{ $slot }}</span>
