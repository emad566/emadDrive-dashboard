<form wire:submit="save" x-data="{
    birthday: @entangle('birthday').live,
    national_expiry_date: @entangle('national_expiry_date').live,
    license_expiry_date: @entangle('license_expiry_date').live,
}">
    <div class="d-flex flex-wrap">
        <x-infos.info :label="__('Register step')" :value="$captain->register_step . '/' . 4" />
    </div>

    <div class="row pb-7">
       <x-images.card-image wrapperClass="col-xs-12 col-md-3" imgClass="h-140px" :src="asset('storage/'.$captain->national_id_front)" :title="__('National id front')"/>
       <x-images.card-image wrapperClass="col-xs-12 col-md-3" imgClass="h-140px" :src="asset('storage/'.$captain->national_id_back)" :title="__('National id back')"/>
       <x-images.card-image wrapperClass="col-xs-12 col-md-3" imgClass="h-140px" :src="asset('storage/'.$captain->driving_license_front)" :title="__('Driving license front')"/>
       <x-images.card-image wrapperClass="col-xs-12 col-md-3" imgClass="h-140px" :src="asset('storage/'.$captain->driving_license_back)" :title="__('Driving license back')"/>
    </div>

    <div class="row">
        <x-form.input wire:model.live="full_name" name="full_name" :label="__('Full Name')" :placeholder="__('Full Name')"/>
        <x-form.input wire:model.blur="mobile" name="mobile" :label="__('Mobile')" :placeholder="__('Mobile')" maxlength='11' minlength='11'/>
        <x-form.input wire:model.blur="email" name="email" type="email" :label="__('Email')" :placeholder="__('Email')"/>
        <x-form.date  wire:model.live="birthday" name="birthday" :label="__('Birthday')" :placeholder="__('Birthday')" />
        <x-form.date  wire:model.live="national_expiry_date" name="national_expiry_date" :label="__('National expiry date')" :placeholder="__('National expiry date')" />
        <x-form.date  wire:model.live="license_expiry_date" name="license_expiry_date" :label="__('License expiry date')" :placeholder="__('License expiry date')" />
        <x-form.radios name="gender" :label="__('gender')" :checkedValue="$captain->gender" :values="$genders" :options="[__('male'), __('female')]"/>
    </div>

    <div class="d-flex flex-wrap justify-content-end">
        <x-buttons.submit target="save" >{{ __('Save') }}</x-buttons.submit>
        <x-buttons.save wire:click="activate" target="activate" >{{ __('Accept') }}</x-buttons.save>
    </div>

</form>
