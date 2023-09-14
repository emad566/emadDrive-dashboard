<form wire:submit="save">
    <div class="row">
{{--        'captain_id', 'registration_plate', 'brand', 'model', 'color', 'model_date', 'status', 'is_default'--}}

        <x-images.card-image wrapperClass="col-xs-12 col-md-6" imgClass="h-275px" :src="asset('storage/'.$vehicle->vehicle_front)" :title="__('Vehicle license front')"/>
        <x-images.card-image wrapperClass="col-xs-12 col-md-6" imgClass="h-275px" :src="asset('storage/'.$vehicle->vehicle_back)" :title="__('Vehicle license back')"/>

        <x-form.input required="*" wire:model.blur="registration_plate" name="registration_plate" :label="__('Registration plate')" :placeholder="__('Registration plate')"/>

        <x-form.select2 inputId="brandsId" :select2="true" wire:model.live="brand_id" name="brand_id" :label="__('Brand')" wrapperClasses="col-lg-4 col-md-6 col-sm-12">
            <x-options.options-key :trans="false" :options="$brands" val="id" :text="$langName" />
        </x-form.select2>

        <x-form.select2 inputId="brandsId" :select2="true" wire:model.live="carmodel_id" name="carmodel_id" :label="__('Model')" wrapperClasses="col-lg-4 col-md-6 col-sm-12">
            <x-options.options-key :trans="false" :options="$carmodels" val="id" :text="$langName" />
        </x-form.select2>


        <x-form.select required="*" wire:model.blur="model_date" name="model_date" :label="__('Model date')">
            <x-options.options :options="$years" />
        </x-form.select>

        <x-form.select2 inputId="colorsId" :select2="true" wire:model.live="color_id" name="color_id" :label="__('Color')" wrapperClasses="col-lg-4 col-md-6 col-sm-12">
            <x-options.options-key :trans="false" :options="$colors" val="id" :text="$langName" />
        </x-form.select2>

        <x-form.date  wire:model.live="vehicle_license_expire_date" name="vehicle_license_expire_date" :label="__('Vehicle license expire date')" :placeholder="__('Vehicle license expire date')" />
    </div>

    <div class="d-flex flex-wrap justify-content-end">
        <x-buttons.submit target="save" >{{ __('Save') }}</x-buttons.submit>
        <x-buttons.save wire:click="activate" target="activate" >{{ __('Accept') }}</x-buttons.save>
    </div>

</form>
