<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">{{__("Users")}}
                <span class="d-block text-muted pt-2 font-size-sm">{{__("Show All")}}</span>
            </h3>
        </div>
        <div class="card-toolbar">
            <a wire:click.prevent="create" class="btn btn-primary font-weight-bolder"  >
                <i class="la la-plus"></i>{{__("New User")}}</a>
            <!--end::Button-->
        </div>
    </div>



    <div class="card-body table-responsive">
        <div class="row">
            <x-form.select wire:model.lazy="paginate" name="paginate" :label="__('Show')">
                <x-options.options key="all" value="All" :options="$paginate_list" selected="5"/>
            </x-form.select>
            <x-form.input-icon wire.debounce.500ms="search" name="search" :label="__('Search')" placeholder="{{ __('Search') }} {{ __('Mobile') }} - {{ __('Full Name') }} ..." icon="flaticon2-search-1 icon-md"/>
        </div>




        <x-table.table>
            <x-slot name="head">
                <x-table.heading sortable wire:click="sortBy('mobile')" :direction="$sort_field === 'mobile'? $sort_direction : null">{{ __('Mobile') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('name')" :direction="$sort_field === 'name'? $sort_direction : null">{{ __('Full Name') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('email')" :direction="$sort_field === 'email'? $sort_direction : null">{{ __('Email') }}</x-table.heading>
                <x-table.heading>{{ __('Since') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('created_at')" :direction="$sort_field === 'created_at'? $sort_direction : null">{{ __('Created') }}</x-table.heading>
                <x-table.heading>{{ __('Actions') }}</x-table.heading>
            </x-slot>
            <x-slot name="body">
                @php $i=1 @endphp
                @foreach($users as $user)
                    <x-table.row wire:loading.class="opacity-50">
                        <x-table.cell>{{ $user->mobile }}</x-table.cell>
                        <x-table.cell>{{ $user->name }}</x-table.cell>
                        <x-table.cell>{{ $user->email }}</x-table.cell>
                        <x-table.cell>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</x-table.cell>
                        <x-table.cell>{{ $user->created_at }}</x-table.cell>
                        <x-table.cell>
                           <x-buttons.button wire:click="edit({{ $user->id }})">{{ __('Edit') }}</x-buttons.button>
                        </x-table.cell>
                    </x-table.row>
                @endforeach

                <x-table.nodata :items="$users"></x-table.nodata>

            </x-slot>
        </x-table.table>

        <div class="mt-5">
            @if($paginate != 'all')
                {{ $users->links() }}
            @endif

        </div>
    </div>
    <!--end::Body-->


            <form wire:submit.prevent="save">
    <x-modal.dialog wire:model="show_modal">
        <x-slot name="title">{{__($is_edit? 'Edit' : 'Add')}}: {{ $userEdit?->name }}</x-slot>
        <x-slot name="content">

                <div class="row">
                    <x-form.input wire:model.lazy="userEdit.name" name="userEdit.name" :label="__('Full Name')" :placeholder="__('Full Name')" wrapperClasses="col-12"/>
                    <x-form.input wire:model.lazy="userEdit.mobile" name="userEdit.mobile" :label="__('Mobile')" :placeholder="__('Mobile')" maxlength='11' minlength='11' wrapperClasses="col-12"/>
                    <x-form.input wire:model.lazy="userEdit.email" name="userEdit.email" type="email" :label="__('Email')" :placeholder="__('Email')" wrapperClasses="col-12"/>
                    @if(!$is_edit)
                    <x-form.input wire:model="password" name="password" type="password" :label="__('Password')" :placeholder="__('Password')" wrapperClasses="col-12"/>
                   <p>{{$userEdit?->password}}</p>
                    <x-form.input wire:model.lazy="password_confirmation" name="password_confirmation" type="password" :label="__('Password Confirmation')" :placeholder="__('Password Confirmation')" wrapperClasses="col-12"/>
                    @endif
                </div>
        </x-slot>
        <x-slot name="footer">
            <div class="d-flex flex-wrap justify-content-end">
                <x-buttons.save wire:click="cancel" target="cancel" >{{ __('Cancel') }}</x-buttons.save>
                <x-buttons.submit target="save" >{{ __('Save') }}</x-buttons.submit>
            </div>
        </x-slot>
    </x-modal.dialog>
            </form>
</div>
