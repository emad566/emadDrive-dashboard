<form wire:submit.prevent="save">
    <div class="d-flex flex-wrap justify-content-evenly">
        <x-images.card-image wrapperClass="w-1/2 pb-10 pl-3" imgClass="h-275px" :src="asset('storage/'.$vehicle->vehicle_front)" :title="__('Vehicle front')"/>
        <x-images.card-image wrapperClass="w-1/2 pb-10 pl-3" imgClass="h-275px" :src="asset('storage/'.$vehicle->vehicle_back)" :title="__('Vehicle back')"/>
        <x-images.card-image wrapperClass="w-1/2 pb-10 pl-3" imgClass="h-275px" :src="asset('storage/'.$vehicle->vehicle_left)" :title="__('Vehicle left')"/>
        <x-images.card-image wrapperClass="w-1/2 pb-10 pl-3" imgClass="h-275px" :src="asset('storage/'.$vehicle->vehicle_right)" :title="__('Vehicle right')"/>
        <x-images.card-image wrapperClass="w-1/2 pb-10 pl-3" imgClass="h-275px" :src="asset('storage/'.$vehicle->vehicle_front_seat)" :title="__('Vehicle front seat')"/>
        <x-images.card-image wrapperClass="w-1/2 pb-10 pl-3" imgClass="h-275px" :src="asset('storage/'.$vehicle->vehicle_back_seat)" :title="__('Vehicle back seat')"/>
    </div>

    <div class="d-flex flex-wrap justify-content-end">
        <x-buttons.submit target="save" >{{ __('Save') }}</x-buttons.submit>
        <x-buttons.save wire:click="activate" target="activate" >{{ __('Accept') }}</x-buttons.save>
    </div>
</form>

