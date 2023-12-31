<x-slot name="title">{{__('Vehicle Class')}}</x-slot>
<x-slot name="header">{{__('Vehicle Class')}}</x-slot>


<div class="card card-custom" x-data="{
    show: false,
    isCreate: false,
}">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">{{__("Vehicle Class")}}
                <span class="d-block text-muted pt-2 font-size-sm">{{__("Show All")}}</span>
            </h3>
        </div>
        <div class="card-toolbar">
            <a wire:click.prevent="create" class="btn btn-primary font-weight-bolder" x-on:click="show=true; isCreate=true" >
                <i class="la la-plus"></i> {{ __('Add') }} {{__("Vehicle Class")}}</a>
            <!--end::Button-->
        </div>
    </div>



    <div class="card-body table-responsive">
        <div class="row">
            <x-form.select wire:model.live="paginate" name="paginate" :label="__('Show')">
                <x-options.options key="all" value="All" :options="$paginate_list" selected="5"/>
            </x-form.select>
            <x-form.input-icon wire:model.live.debounce.500ms="search" name="search" :label="__('Search')" placeholder="{{ __('Search') }}  - {{ __('Name') }} ..." icon="flaticon2-search-1 icon-md"/>
        </div>




        <x-table.table>
            <x-slot name="head">
                <x-table.heading>{{ __('#') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('name')" :direction="$sort_field === 'name'? $sort_direction : null">{{ __('Name') }}</x-table.heading>
                <x-table.heading>{{ __('Icon') }}</x-table.heading>
                <x-table.heading>{{ __('Class') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('status')" :direction="$sort_field === 'status'? $sort_direction : null">{{ __('Status') }}</x-table.heading>
                <x-table.heading>{{ __('Actions') }}</x-table.heading>
            </x-slot>
            <x-slot name="body">
                @php $langName = getLocal() . '_name' @endphp
                @foreach($items as $item)
                    <x-table.row wire:loading.class="opacity-50" wire:target="search">
                        <x-table.cell>
                            <x-snippets.avatar>{{ $item->id }}</x-snippets.avatar>
                        </x-table.cell>
                        <x-table.cell>{{ $item->$langName }}</x-table.cell>
                        <x-table.cell>
                            <div class="symbol symbol-50px">
                                <img src="{{ $item->icon_src }}" alt="">
                            </div>
                        </x-table.cell>                        <x-table.cell>{{ $item->class }}</x-table.cell>
                        <x-table.cell>
                            <x-form.switch :checked="$item?->status_switch" wire:click="status_switch({{ __($item->id) }})" >1</x-form.switch>
                        </x-table.cell>
                        <x-table.cell>
                            <x-buttons.edit wire:click="edit({{ $item->id }}).live" x-on:click="show=true; isCreate=false"/>
                            <x-buttons.delete actionId="{{ $item->id }}" x-on:click="sweetDelete('{{ $item->id }}')" />
                        </x-table.cell>
                    </x-table.row>
                @endforeach

                <x-table.nodata :items="$items"></x-table.nodata>

            </x-slot>
        </x-table.table>

        <div class="mt-5">
            @if($paginate != 'all')
                {{ $items->links() }}
            @endif

        </div>
    </div>


    @include('livewire.vehicle-class.partials.create')
</div>

