@props([
    'target'=>'',
    'class'=>'btn btn-primary btn-md w-100px mr-5',
])
<div class="d-flex justify-content-end">
    <button type="submit" class="{{ $class }}">{{ $slot }} </button>
    <i class="fas fa-spinner rotate" wire:loading wire:target="{{$target}}"></i>
</div>
