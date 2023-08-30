<form wire:submit="save">
    <div class="row">
{{--        'captain_id', 'registration_plate', 'brand', 'model', 'color', 'model_date', 'status', 'is_default'--}}

        <x-images.card-image wrapperClass="col-xs-12 col-md-6" imgClass="h-275px" :src="asset('storage/'.$vehicle->vehicle_front)" :title="__('Vehicle license front')"/>
        <x-images.card-image wrapperClass="col-xs-12 col-md-6" imgClass="h-275px" :src="asset('storage/'.$vehicle->vehicle_back)" :title="__('Vehicle license back')"/>

        <x-form.input required="*" wire:model.blur="registration_plate" name="registration_plate" :label="__('Registration plate')" :placeholder="__('Registration plate')"/>

        <x-form.select required="*" wire:model.blur="brand" name="brand" :label="__('Brand')">
            <x-options.options :options="$brands" />
        </x-form.select>

        <x-form.input required="*" wire:model.blur="model" name="model" :label="__('Model')" :placeholder="__('Model')"/>

        <x-form.select required="*" wire:model.blur="model_date" name="model_date" :label="__('Model date')">
            <x-options.options :options="$years" />
        </x-form.select>

        <x-form.select required="*" wire:model.blur="color" name="color" :label="__('Color')">
            <x-options.options :options="$colors" />
        </x-form.select>
        <x-form.date  wire:model.live="vehicle_license_expire_date" name="vehicle_license_expire_date" :label="__('Vehicle license expire date')" :placeholder="__('Vehicle license expire date')" />
    </div>

    <div class="d-flex flex-wrap justify-content-end">
        <x-buttons.submit target="save" >{{ __('Save') }}</x-buttons.submit>
        <x-buttons.save wire:click="activate" target="activate" >{{ __('Accept') }}</x-buttons.save>
    </div>

</form>
