<form wire:submit.prevent="save">
    <div class="d-flex flex-wrap">
        <x-infos.info :label="__('Register step')" :value="$captain->register_step . '/' . 4" />
    </div>

    <div class="d-flex justify-content-between pb-7">
       <x-images.card-image wrapperClass="pl-4 w-1/4" imgClass="h-140px" :src="asset('storage/'.$captain->national_id_front)" :title="__('National id front')"/>
       <x-images.card-image wrapperClass="pl-4 w-1/4" imgClass="h-140px" :src="asset('storage/'.$captain->national_id_back)" :title="__('National id back')"/>
       <x-images.card-image wrapperClass="pl-4 w-1/4" imgClass="h-140px" :src="asset('storage/'.$captain->driving_license_front)" :title="__('Driving license front')"/>
       <x-images.card-image wrapperClass="pl-4 w-1/4" imgClass="h-140px" :src="asset('storage/'.$captain->driving_license_back)" :title="__('Driving license back')"/>

    </div>

    <div class="d-flex flex-wrap">
        <x-form.input wire:model.lazy="full_name" name="full_name" :label="__('Full Name')" :placeholder="__('Full Name')" wrapperClasses="md:w-1/3 xs:w-1 pr-5"/>
        <x-form.input wire:model.lazy="mobile" name="mobile" :label="__('Mobile')" :placeholder="__('Mobile')" wrapperClasses="md:w-1/3 xs:w-1 pr-5" maxlength='11' minlength='11'/>
        <x-form.input wire:model.lazy="email" name="email" type="email" :label="__('Email')" :placeholder="__('Email')" wrapperClasses="md:w-1/3 xs:w-1 pr-5"/>
        <x-form.input class="pikaday" wire:model.lazy="birthday" name="birthday" :label="__('Birthday')" :placeholder="__('Birthday')" wrapperClasses="md:w-1/3 xs:w-1 pr-5 pikaday"/>
        <x-form.input class="pikaday"  wire:model.lazy="national_expiry_date" name="national_expiry_date" :label="__('National expiry date')" :placeholder="__('National expiry date')" wrapperClasses="md:w-1/3 xs:w-1 pr-5"/>
        <x-form.input class="pikaday"  wire:model.lazy="license_expiry_date" name="license_expiry_date" :label="__('License expiry date')" :placeholder="__('License expiry date')" wrapperClasses="md:w-1/3 xs:w-1 pr-5"/>
        <x-form.radios name="gender" :label="__('gender')" :checkedValue="$captain->gender" :values="$genders" :options="[__('male'), __('female')]"/>
    </div>

    <div class="d-flex flex-wrap justify-content-end">
        <x-buttons.submit target="save" >{{ __('Save') }}</x-buttons.submit>
        <x-buttons.save wire:click="activate" target="activate" >{{ __('Accept') }}</x-buttons.save>
    </div>
</form>
