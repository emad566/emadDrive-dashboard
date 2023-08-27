<form x-on:submit.prevent="save" x-show="show">
    <x-modal.dialog>
        <x-slot name="title">
            {{__($roleEdit?->id? 'Edit' : 'Add')}} {{ __('Role') }}:
            <span x-text="name"></span>
        </x-slot>
        <x-slot name="content">
            <i class="fas fa-spinner rotate" wire:loading ></i>

            <div class="row">
                <x-form.input x-model="name" name="roleEdit.name" :label="__('Full Name')" :placeholder="__('Full Name')" wrapperClasses="col-12"/>
            </div>

            @include('livewire.role.partials.select-permissions')
        </x-slot>
        <x-slot name="footer">
            <div class="d-flex flex-wrap justify-content-end">
                <x-buttons.save wire:click="cancel" target="cancel" x-on:click="show=false">{{ __('Cancel') }}</x-buttons.save>
                <x-buttons.submit target="save" >{{ __('Save') }}</x-buttons.submit>
            </div>
        </x-slot>

    </x-modal.dialog>
</form>
