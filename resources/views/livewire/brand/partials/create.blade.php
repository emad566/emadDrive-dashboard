<form wire:submit="save"   x-show="show" x-on:alert-saved.window="show=false">
    <x-modal.dialog>
        <x-slot name="title">{{__($is_edit? 'Edit' : 'Add')}}: {{ $currentItem->$langName }} </x-slot>
        <x-slot name="content">
            <x-snippets.loading wire:target="edit" />
            <div class="row">
                <x-form.input wire:model.blur="currentItem.ar_name" name="currentItem.ar_name" :label="__('Name')" :placeholder="__('Name')" wrapperClasses="col-12"/>
                <x-form.input wire:model.blur="currentItem.en_name" name="currentItem.en_name" :label="__('Name')" :placeholder="__('Name')" wrapperClasses="col-12"/>
                <x-form.switch-label wire:model.blur="currentItem.status"  :label="__('Status')" wrapperClasses="row pr-10">1</x-form.switch-label>
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
