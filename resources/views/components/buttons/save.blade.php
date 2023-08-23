@props([
    'target'=>'',
    'class'=>'btn btn-bg-warning btn-md w-100px mr-5',
])
<div class="d-flex justify-content-end">
    <button {{ $attributes }} type="button" class="{{ $class }}">{{ $slot }} </button>
    <i class="fas fa-spinner rotate" wire:loading wire:target="{{$target}}"></i>
</div>
