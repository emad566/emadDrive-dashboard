<form wire:submit.prevent="save"   x-show="show" x-on:alert-saved.window="show=false">
    <x-modal.dialog>
        <x-slot name="title">{{__($is_edit? 'Edit' : 'Add')}}: {{ $currentItem->title }} </x-slot>
        <x-slot name="content">
                @php print_r($errors) @endphp
            <x-snippets.loading wire:target="edit" />
            <div class="row">
                <x-form.input wire:model.blur="currentItem.key" name="currentItem.key" :label="__('Key')" :placeholder="__('Key')" wrapperClasses="col-md-12 col-lg-6"/>
                <x-form.input wire:model.blur="currentItem.value" name="currentItem.value" :label="__('Value')" :placeholder="__('Value')" wrapperClasses="col-md-12 col-lg-6"/>
                <x-form.input wire:model.blur="currentItem.type" name="currentItem.type" :label="__('Type')" :placeholder="__('Value')" wrapperClasses="col-md-12 col-lg-6"/>
                <x-form.input wire:model.blur="currentItem.roles" name="currentItem.roles" :label="__('Roles')" :placeholder="__('Roles')" wrapperClasses="col-md-12 col-lg-6"/>
                <x-form.input wire:model.blur="currentItem.ar_label" label="currentItem.ar_label" :label="__('Label') . __('ar')" :placeholder="__('Label') . __('ar')" wrapperClasses="col-md-12 col-lg-6"/>
                <x-form.input wire:model.blur="currentItem.en_label" label="currentItem.en_label" :label="__('Label') . __('en')" :placeholder="__('Label') . __('en')" wrapperClasses="col-md-12 col-lg-6"/>
                <x-form.input wire:model.blur="currentItem.ar_description" description="currentItem.ar_description" :label="__('Description') . __('ar')" :placeholder="__('Description') . __('ar')" wrapperClasses="col-md-12 col-lg-6"/>
                <x-form.input wire:model.blur="currentItem.en_description" description="currentItem.en_description" :label="__('Description') . __('en')" :placeholder="__('Description') . __('en')" wrapperClasses="col-md-12 col-lg-6"/>
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

