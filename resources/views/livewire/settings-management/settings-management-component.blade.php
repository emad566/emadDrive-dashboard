<x-slot name="title">{{__('Settings Management')}}</x-slot>
<x-slot name="header">{{__('Settings Management')}}</x-slot>

<div class="card card-custom" x-data="{
    show: false,
    isCreate: false,
}">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">{{__("Settings Management")}}
                <span class="d-block text-muted pt-2 font-size-sm">{{__("Show All")}}</span>
            </h3>
        </div>
        <div class="card-toolbar">
            <a wire:click.prevent="create" class="btn btn-primary font-weight-bolder" x-on:click="show=true; isCreate=true" >
                <i class="la la-plus"></i>{{__("Add")}} {{__("Field")}}
            </a>
        </div>
    </div>

    <div class="card-body table-responsive">
        <div class="row">
            <x-form.select wire:model.live="paginate" name="paginate" :label="__('Show')">
                <x-options.options key="all" value="All" :options="$paginate_list" selected="5"/>
            </x-form.select>
            <x-form.input-icon wire:model.live.debounce.500ms="search" name="search" :label="__('Search')" placeholder="{{ __('Search') }} - {{ __('Title') }} ..." icon="flaticon2-search-1 icon-md"/>
        </div>


        <x-table.table>
            @php $langName = getLocal() . '_name' @endphp
            <x-slot name="head">
                <x-table.heading>{{ __('#') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('key')" :direction="$sort_field === 'key'? $sort_direction : null">{{ __('Key') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('value')" :direction="$sort_field === 'value'? $sort_direction : null">{{ __('Value') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('type')" :direction="$sort_field === 'type'? $sort_direction : null">{{ __('Type') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('roles')" :direction="$sort_field === 'roles'? $sort_direction : null">{{ __('Roles') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy(getLangKey('label'))" :direction="$sort_field === getLangKey('label')? $sort_direction : null">{{ __('Label') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('status')" :direction="$sort_field === 'status'? $sort_direction : null">{{ __('Status') }}</x-table.heading>
                <x-table.heading>{{ __('Actions') }}</x-table.heading>
            </x-slot>

            <x-slot name="body">
                @foreach($items as $item)
                    <x-table.row wire:loading.class="opacity-50" wire:target="search">
                        <x-table.cell>{{ $item->id }}</x-table.cell>
                        <x-table.cell>{{ $item->key }}</x-table.cell>
                        <x-table.cell>{{ $item->value }}</x-table.cell>
                        <x-table.cell>{{ $item->type }}</x-table.cell>
                        <x-table.cell>{{ $item->roles }}</x-table.cell>
                        <x-table.cell>{{ $item->getLangKey('label') }}</x-table.cell>
                        <x-table.cell>
                            <x-form.switch :checked="$item->status_switch"  wire:click="status_switch({{ $item->id }})" >1</x-form.switch>
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


    @include('livewire.settings-management.partials.create')
</div>
