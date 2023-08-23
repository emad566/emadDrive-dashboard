@props([
    'icon'=>'success'
])

<span class="label label-lg label-light-{{ $icon }} label-inline">
    <div class="symbol symbol-100 m-5">
        <i class="symbol-badge bg-{{ $icon }}"></i>
    </div>
    {{ $slot }}
</span>
