<form wire:submit="save"   x-show="show" x-on:alert-saved.window="show=false">
    <x-modal.dialog>
        <x-slot name="title">{{__($is_edit? 'Edit' : 'Add')}}: {{ $currentItem->name }} </x-slot>

        <x-slot name="content">
            <x-snippets.loading wire:target="edit" />
            <div class="row">
                <x-form.input wire:model.blur="currentItem.name" name="currentItem.name" :label="__('Name')" :placeholder="__('Name')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.description" name="currentItem.description" :label="__('Description')" :placeholder="__('Description')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.icon" name="currentItem.icon" :label="__('Icon')" :placeholder="__('Icon')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.class" name="currentItem.class" :label="__('Class')" :placeholder="__('Class')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.base_fare" name="currentItem.base_fare" :label="__('Base Fare')" :placeholder="__('Base Fare')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.distance" name="currentItem.distance" :label="__('Distance')" :placeholder="__('Distance')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.wait" name="currentItem.wait" :label="__('Wait')" :placeholder="__('Wait')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.cost_small_destination" name="currentItem.cost_small_destination" :label="__('cost Small Destination')" :placeholder="__('cost Small Destination')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.cancel_value" name="currentItem.cancel_value" :label="__('cancel Value')" :placeholder="__('cancel Value')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.outside_town" name="currentItem.outside_town" :label="__('outside Town')" :placeholder="__('outside Town')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.add_value" name="currentItem.add_value" :label="__('add Value')" :placeholder="__('add Value')" wrapperClasses="col-12"/>
                <x-form.switch-label :checked="$item?->status_switch" wire:click="status_switch({{ __($item->id) }})" :label="__('Status')" wrapperClasses="row">1</x-form.switch-label>
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
