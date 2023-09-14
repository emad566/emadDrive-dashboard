<form wire:submit="save"   x-show="show" x-on:alert-saved.window="show=false">
    <x-modal.dialog>
        <x-slot name="title"> {{__(($permissionEdit?->id)? 'Edit' : 'Add')}}: {{ $permissionEdit?->name }}</x-slot>
        <x-slot name="content">
            <x-snippets.loading wire:target="edit" />

            <div class="row">
                <x-form.input wire:model.blur="permissionEdit.name" name="permissionEdit.name" :label="__('Name')" :placeholder="__('Name')" wrapperClasses="col-12"/>
                <x-form.select2 inputId="parentId" :select2="true" wire:model.blur="permissionEdit.parent_id" name="permissionEdit.parent_id" :label="__('Parent')" wrapperClasses="col-12">
                    <x-options.options-key :trans="false" :options="$all_permissions" val="id" text="name" />
                </x-form.select2>
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


