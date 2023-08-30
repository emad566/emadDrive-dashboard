<form wire:submit="save"   x-show="show" x-on:alert-saved.window="show=false">
    <x-modal.dialog>
        <x-slot name="title">{{__($is_edit? 'Edit' : 'Add')}}: {{ $userEdit?->name }} </x-slot>
        <x-slot name="content">
            <x-snippets.loading wire:target="edit" />

            <div class="row">
                <x-form.input wire:model.blur="userEdit.name" name="userEdit.name" :label="__('Full Name')" :placeholder="__('Full Name')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="userEdit.mobile" name="userEdit.mobile" :label="__('Mobile')" :placeholder="__('Mobile')" maxlength='11' minlength='11' wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="userEdit.email" name="userEdit.email" type="email" :label="__('Email')" :placeholder="__('Email')" wrapperClasses="col-12"/>
                <x-form.select2 inputId="rolesId" :select2="true" wire:model.live="selectetRoleId" name="selectetRoleId" :label="__('Role')" wrapperClasses="col-12">
                    <x-options.options-key :options="$roles" val="id" text="name" />
                </x-form.select2>
                <div x-show="isCreate" class="col-12">
                    <x-form.input wire:model.blur="password" name="password" type="password" :label="__('Password')" :placeholder="__('Password')" wrapperClasses="col-12"/>
                    <x-form.input wire:model.blur="password_confirmation" name="password_confirmation" type="password" :label="__('Password Confirmation')" :placeholder="__('Password Confirmation')" wrapperClasses="col-12"/>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="d-flex flex-wrap justify-content-end">
                <x-buttons.save wire:click="cancel" target="cancel" x-on:click="show=false">{{ __('Cancel') }}</x-buttons.save>
                <x-buttons.submit target="save" >{{ __('Save') }}</x-buttons.submit>
            </div>
        </x-slot>
    </x-modal.dialog>
</form>
