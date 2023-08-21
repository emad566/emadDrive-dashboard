@props([
    'active'=>'',
    'id'=>'',
    'iconclass'=>'',
    'title'=>'',
])
@php $active = $id == $active? 'active' : '' @endphp
<li class="nav-item">
    <a {{ $attributes }} class="nav-link {{ $active }}" data-toggle="tab" href="#{{ $id }}">
        <span class="nav-icon"><i class="{{ $iconclass }}"></i></span>
        <span class="nav-text">{{ $title }}</span>
    </a>
</li>
