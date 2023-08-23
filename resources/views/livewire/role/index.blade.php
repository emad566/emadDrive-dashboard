<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">{{__("Roles")}}
                <span class="d-block text-muted pt-2 font-size-sm">{{__("Show All")}}</span>
            </h3>
        </div>
        <div class="card-toolbar">
            <a wire:click.prevent="create" class="btn btn-primary font-weight-bolder"  >
                <i class="la la-plus"></i>{{__("New Role")}}</a>
            <!--end::Button-->
        </div>
    </div>



    <div class="card-body table-responsive">
        <div class="row">
            <x-form.select wire:model.lazy="paginate" name="paginate" :label="__('Show')">
                <x-options.options key="all" value="All" :options="$paginate_list" selected="5"/>
            </x-form.select>
            <x-form.input-icon wire.debounce.500ms="search" name="search" :label="__('Search')" placeholder="{{ __('Search') }}  - {{ __('Full Name') }} ..." icon="flaticon2-search-1 icon-md"/>
        </div>




        <x-table.table>
            <x-slot name="head">
                <x-table.heading sortable wire:click="sortBy('name')" :direction="$sort_field === 'name'? $sort_direction : null">{{ __('Full Name') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('created_at')" :direction="$sort_field === 'created_at'? $sort_direction : null">{{ __('Created') }}</x-table.heading>
                <x-table.heading>{{ __('Actions') }}</x-table.heading>
            </x-slot>
            <x-slot name="body">
                @php $i=1 @endphp
                @foreach($roles as $role)
                    <x-table.row wire:loading.class="opacity-50">
                        <x-table.cell>{{ $role->name }}</x-table.cell>
                        <x-table.cell>{{ $role->created_at }}</x-table.cell>
                        <x-table.cell>
                            <x-buttons.edit wire:click="edit({{ $role->id }})" />
                            <x-buttons.delete actionId="{{ $role->id }}" />
                        </x-table.cell>
                    </x-table.row>
                @endforeach

                <x-table.nodata :items="$roles"></x-table.nodata>

            </x-slot>
        </x-table.table>

        <div class="mt-5">
            @if($paginate != 'all')
                {{ $roles->links() }}
            @endif

        </div>
    </div>
    <!--end::Body-->


    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model="show_modal">
            <x-slot name="title">{{__(!$role?->id? 'Edit' : 'Add')}}: {{ $role?->name }}</x-slot>
            <x-slot name="content">

                    <div class="row">
                        <x-form.input wire:model.lazy="role.name" name="role.name" :label="__('Full Name')" :placeholder="__('Full Name')" wrapperClasses="col-12"/>
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

    <x-sweet.delete />
</div>
