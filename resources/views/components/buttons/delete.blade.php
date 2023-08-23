@props([
    'actionId'=>''
])
<x-buttons.button  action-id="{{ $actionId }}" class="sweetDelete bg-red-300" >{{ __('Delete') }}</x-buttons.button>
