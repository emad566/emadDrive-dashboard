@props([
    'actionId'=>''
])
<x-buttons.button {{ $attributes }} action-id="{{ $actionId }}" class="sweetDelete bg-red-300" >{{ __('Delete') }}</x-buttons.button>
