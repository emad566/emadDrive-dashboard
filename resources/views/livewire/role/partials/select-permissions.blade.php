


<div class="row">
    <x-form.input
        wire:model="permission_search"
        name="permission_search"
        :label="__('Permissions')"
        :placeholder=" __('Permissions') . ' ... ' . __('Search') . ' ... ' "
        wrapperClasses="col-12"
    />
    <i class="fas fa-spinner rotate" wire:loading ></i>

</div>

<div class="row">

    @if($errors->first('selectedPermissionIds')) <span class="form-text text-danger">{{ $errors->first('selectedPermissionIds') }}</span> @endif


    <div class="scroll scroll-pull w-100 h-300px" data-scroll="true" data-suppress-scroll-x="false" data-swipe-easing="true" >
        <div class="pl-10 " >
{{--            <div x-text="selectedPermissions" class="text-right w-100"></div>--}}
            <x-snippets.checkbox-cat-list :items="$permissions"/>
        </div>
    </div>

</div>
