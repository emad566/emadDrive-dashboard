@props([
    'target'=>'',
])
<div class="d-flex justify-content-end">
    <button {{ $attributes }} type="button" class="btn btn-bg-warning btn-md w-100px mr-5">{{ $slot }} </button>
    <i class="fas fa-spinner rotate" wire:loading wire:target="{{$target}}"></i>
</div>
