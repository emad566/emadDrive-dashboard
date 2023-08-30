@props([
    'target'=>'',
    'class'=>'btn btn-bg-warning btn-md w-100px',
])
<div class="d-flex justify-content-end mx-5">
    <button {{ $attributes }} type="button" class="{{ $class }}">{{ $slot }} </button>
    <i {{ $attributes }} class="fas fa-spinner rotate d-none" wire:loading.class.remove="d-none"></i>

</div>
