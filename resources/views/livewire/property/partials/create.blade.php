<form wire:submit="save"   x-show="show" x-on:alert-saved.window="show=false">
    <x-modal.dialog>
        <x-slot name="title">{{__($is_edit? 'Edit' : 'Add')}}: {{ $currentItem->title }} </x-slot>
        <x-slot name="content">
            <x-snippets.loading wire:target="edit" />

            <div class="row">
                <x-form.input wire:model.blur="currentItem.title" name="currentItem.title" :label="__('Title')" :placeholder="__('Title')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.icon" name="currentItem.icon" :label="__('Icon')" :placeholder="__('Icon')" wrapperClasses="col-12"/>
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
