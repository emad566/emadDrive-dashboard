


<div class="row">
    <x-form.input
        wire:model.live="permission_search"
        name="permission_search"
        :label="__('Permissions')"
        :placeholder=" __('Permissions') . ' ... ' . __('Search') . ' ... ' "
        wrapperClasses="col-12"
    />
    <x-snippets.loading wire:target="edit" />

</div>

<div class="row">

    @if($errors->first('selectedPermissionIds')) <span class="form-text text-danger">{{ $errors->first('selectedPermissionIds') }}</span> @endif


    <div class="scroll scroll-pull w-100 h-300px" data-scroll="true" data-suppress-scroll-x="false" data-swipe-easing="true" >
        <div class="pl-10 " >
            <x-snippets.checkbox-cat-list :items="$permissions"/>
        </div>
    </div>

</div>
