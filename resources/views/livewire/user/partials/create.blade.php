<form wire:submit.prevent="save">
    <x-modal.dialog wire:model="show_modal">
        <x-slot name="title">{{__($is_edit? 'Edit' : 'Add')}}: {{ $userEdit?->name }}</x-slot>
        <x-slot name="content">

            <div class="row">
                <x-form.input wire:model.lazy="userEdit.name" name="userEdit.name" :label="__('Full Name')" :placeholder="__('Full Name')" wrapperClasses="col-12"/>
                <x-form.input wire:model.lazy="userEdit.mobile" name="userEdit.mobile" :label="__('Mobile')" :placeholder="__('Mobile')" maxlength='11' minlength='11' wrapperClasses="col-12"/>
                <x-form.input wire:model.lazy="userEdit.email" name="userEdit.email" type="email" :label="__('Email')" :placeholder="__('Email')" wrapperClasses="col-12"/>
                @if(!$is_edit)
                    <x-form.input wire:model="password" name="password" type="password" :label="__('Password')" :placeholder="__('Password')" wrapperClasses="col-12"/>
                    <p>{{$userEdit?->password}}</p>
                    <x-form.input wire:model.lazy="password_confirmation" name="password_confirmation" type="password" :label="__('Password Confirmation')" :placeholder="__('Password Confirmation')" wrapperClasses="col-12"/>
                @endif
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="d-flex flex-wrap justify-content-end">
                <x-buttons.save wire:click="cancel" target="cancel" >{{ __('Cancel') }}</x-buttons.save>
                <x-buttons.submit target="save" >{{ __('Save') }}</x-buttons.submit>
            </div>
        </x-slot>
    </x-modal.dialog>
</form>
