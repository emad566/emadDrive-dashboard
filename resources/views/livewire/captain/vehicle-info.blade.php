<form wire:submit.prevent="save">
    <div class="d-flex flex-wrap">
{{--        'captain_id', 'registration_plate', 'brand', 'model', 'color', 'model_date', 'status', 'is_default'--}}
        <div class="d-flex flex-wrap justify-content-evenly">
            <x-images.card-image wrapperClass="w-1/2 pb-10 pl-3" :src="asset('storage/'.$vehicle->vehicle_front)" :title="__('Vehicle license front')"/>
            <x-images.card-image wrapperClass="w-1/2 pb-10 pl-3" :src="asset('storage/'.$vehicle->vehicle_back)" :title="__('Vehicle license back')"/>
        </div>

        <x-form.input required="*" wire:model.lazy="registration_plate" name="registration_plate" :label="__('Registration plate')" :placeholder="__('Registration plate')" wrapperClasses="w-1/3 pr-5"/>

        <x-form.select required="*" wire:model.lazy="brand" name="brand" :label="__('Brand')" wrapperClasses="w-1/3 pr-5">
            <x-options.vehicle-brands />
        </x-form.select>

        <x-form.input required="*" wire:model.lazy="model" name="model" :label="__('Model')" :placeholder="__('Model')" wrapperClasses="w-1/3 pr-5"/>

        <x-form.select required="*" wire:model.lazy="model_date" name="model_date" :label="__('Model date')" wrapperClasses="w-1/3 pr-5">
            <x-options.years />
        </x-form.select>

        <x-form.select required="*" wire:model.lazy="color" name="color" :label="__('Color')" wrapperClasses="w-1/3 pr-5">
            <x-options.colors />
        </x-form.select>

        <x-form.input class="pikaday"  wire:model.lazy="vehicle_license_expire_date" name="vehicle_license_expire_date" :label="__('Vehicle license expire date')" :placeholder="__('Vehicle license expire date')" wrapperClasses="md:w-1/3 xs:w-1 pr-5"/>


    </div>

    <div class="d-flex flex-wrap justify-content-end">
        <x-buttons.submit target="save" >{{ __('Save') }}</x-buttons.submit>
        <x-buttons.save wire:click="activate" target="activate" >{{ __('Accept') }}</x-buttons.save>
    </div>

</form>
