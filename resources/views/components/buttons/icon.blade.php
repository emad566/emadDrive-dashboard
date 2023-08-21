@props([
    'url'=>'#',
    'color'=>'text-blue-500',
    'size'=>'lg'
])
<a href="{{ $url }}" data-toggle="tooltip" title="Hire">
    <i class="fas fa-paper-plane font-size-h1-{{ $size }} {{ $color }} "></i>
</a>
