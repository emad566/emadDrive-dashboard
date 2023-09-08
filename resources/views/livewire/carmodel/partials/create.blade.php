<form wire:submit="save"   x-show="show" x-on:alert-saved.window="show=false">
    <x-modal.dialog>
        <x-slot name="title">{{__($is_edit? 'Edit' : 'Add')}}: {{ $currentItem->$langName }} </x-slot>
        <x-slot name="content">
            <x-snippets.loading wire:target="edit" />
            <div class="row">
                <x-form.input wire:model.blur="currentItem.ar_name" name="currentItem.ar_name" :label="__('Name') . __('ar')" :placeholder="__('Name') . __('ar')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.en_name" name="currentItem.en_name" :label="__('Name') . __('en')" :placeholder="__('Name') . __('en')" wrapperClasses="col-12"/>
                <x-form.select2 inputId="brandsId" :select2="true" wire:model.live="currentItem.brand_id" name="currentItem.brand_id" :label="__('Brand')" wrapperClasses="col-12">
                    <x-options.options-key :trans="false" :options="$brands" val="id" :text="$langName" />
                </x-form.select2>
                <x-form.switch-label wire:model.blur="currentItem.status"  :label="__('Status')" wrapperClasses="row pr-10">1</x-form.switch-label>
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

