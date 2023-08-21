@props(['active'=>'', 'id'=>''])
@php $active = $id == $active? 'active' : '' @endphp

<div class="tab-pane fade show {{ $active }}" id="{{ $id }}" role="tabpanel" aria-labelledby="{{ $id }}">
    {{ $slot }}
</div>
