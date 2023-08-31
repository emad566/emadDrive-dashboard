<x-slot name="title">{{ __('Settings') }}</x-slot>
<x-slot name="header">{{ __('Settings') }}</x-slot>


<div class="card card-custom" x-data="{
    show: false,
    isCreate: false,
}">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">{{__("Settings")}}
                <span class="d-block text-muted pt-2 font-size-sm">{{__("General Settings")}}</span>
            </h3>
        </div>

    </div>

    <div class="card-body">
        <x-form.input wire:model.blur="title" name="title" :label="__('Title')" :placeholder="__('Title')" wrapperClasses="col-12"/>
    </div>
</div>
