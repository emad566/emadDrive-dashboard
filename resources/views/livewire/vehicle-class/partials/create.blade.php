<form wire:submit="save"   x-show="show" x-on:alert-saved.window="show=false">
    <x-modal.dialog>
        <x-slot name="title">{{__($is_edit? 'Edit' : 'Add')}}: {{ $currentItem->name }} </x-slot>

        <x-slot name="content">
            <x-snippets.loading wire:target="edit" />
            <div class="row">
                <x-form.input wire:model.blur="currentItem.ar_name" name="currentItem.ar_name" :label="__('Name') . __('ar')" :placeholder="__('Name') . __('ar')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.en_name" name="currentItem.en_name" :label="__('Name') . __('en')" :placeholder="__('Name') . __('en')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.ar_description" name="currentItem.ar_description" :label="__('Description') . __('ar')" :placeholder="__('Description') . __('ar')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.en_description" name="currentItem.en_description" :label="__('Description') . __('en')" :placeholder="__('Description') . __('en')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.class" name="currentItem.class" :label="__('Class')" :placeholder="__('Class')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.base_fare" name="currentItem.base_fare" :label="__('Base Fare')" :placeholder="__('Base Fare')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.distance" name="currentItem.distance" :label="__('Distance per 1KM')" :placeholder="__('Distance per 1KM')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.wait" name="currentItem.wait" :label="__('Wait')" :placeholder="__('Wait')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.cost_small_destination" name="currentItem.cost_small_destination" :label="__('Cost Small Destination')" :placeholder="__('Cost Small Destination')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.cancel_value" name="currentItem.cancel_value" :label="__('Cancel Value')" :placeholder="__('Cancel Value')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.outside_town" name="currentItem.outside_town" :label="__('Outside Town')" :placeholder="__('Outside Town')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.add_value" name="currentItem.add_value" :label="__('Add Value')" :placeholder="__('Add Value')" wrapperClasses="col-12"/>
                <x-form.switch-label wire:model.blur="currentItem.status"  :label="__('Status')" wrapperClasses="row  pr-10">1</x-form.switch-label>

                <x-form.image
                    :label="__('icon')"
                    style="width: 50px; height: 50px;" imageId="profileImage"
                    :src="asset($newIcon? $newIcon->temporaryUrl(): $currentItem->icon_src)"
                    wire:model.blur="newIcon" name="newIcon" :label="__('Icon')"
                    wrapperClasses="col-12 mt-10 mr-10"
                />
                @if($errors->first('currentItem.icon')) <span class="form-text text-danger">{{ $errors->first('currentItem.icon') }}</span> @endif

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
