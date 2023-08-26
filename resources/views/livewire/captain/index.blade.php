<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">{{__("Captain")}}
                <span class="d-block text-muted pt-2 font-size-sm">{{__("Show All")}}</span>
            </h3>
        </div>
        <div class="card-toolbar">
                <a href="" class="btn btn-primary font-weight-bolder"  >
                    <i class="la la-plus"></i>{{__("New Captain")}}</a>
            <!--end::Button-->
        </div>
    </div>



    <div class="card-body table-responsive">
        <div class="row">
            <x-form.select wire:model.lazy="paginate" name="paginate" :label="__('Show')">
                <x-options.options key="all" value="All" :options="$paginate_list" selected="5"/>
            </x-form.select>
            <x-form.input-icon wire:model.debounce.500ms="search" name="search" :label="__('Search')" placeholder="{{ __('Search') }} {{ __('Mobile') }} - {{ __('Full Name') }} ..." icon="flaticon2-search-1 icon-md"/>
            <x-form.select wire:model.lazy="selectStatus" name="selectStatus" :label="__('Status')">
                <x-options.options key="all" value="All" :options="$captain_options" />
            </x-form.select>
        </div>




        <x-table.table>
            <x-slot name="head">
                <x-table.heading sortable wire:click="sortBy('captain_code')" :direction="$sort_field === 'captain_code'? $sort_direction : null">#</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('mobile')" :direction="$sort_field === 'mobile'? $sort_direction : null">{{ __('Mobile') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('full_name')" :direction="$sort_field === 'full_name'? $sort_direction : null">{{ __('Full Name') }}</x-table.heading>
                <x-table.heading>{{ __('Device Type') }}</x-table.heading>
                <x-table.heading>{{ __('Since') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('created_at')" :direction="$sort_field === 'created_at'? $sort_direction : null">{{ __('Created') }}</x-table.heading>
                <x-table.heading>{{ __('Actions') }}</x-table.heading>
            </x-slot>
            <x-slot name="body">
                @php $i=1 @endphp
                @foreach($captains as $captain)
                    <x-table.row wire:loading.class="opacity-50">
                        <x-table.cell>{{ $captain->captain_code }}</x-table.cell>
                        <x-table.cell>{{ $captain->mobile }}</x-table.cell>
                        <x-table.cell>{{ $captain->full_name }}</x-table.cell>
                        <x-table.cell><i class="{{ $captain->device_type_icon }} font-size-h3-lg"></i> </x-table.cell>
                        <x-table.cell>{{ \Carbon\Carbon::parse($captain->created_at)->diffForHumans() }}</x-table.cell>
                        <x-table.cell>{{ $captain->created_at }}</x-table.cell>
                        <x-table.cell>
                           @if($captain->register_step>1)
                                <x-buttons.icon :url="route('captains.edit', $captain->id)" />
                            @else
                                <span class="label label-lg label-light-warning label-inline">{{ __('Registration') }}</span>
                            @endif
                        </x-table.cell>
                    </x-table.row>
                @endforeach

                <x-table.nodata :items="$captains"></x-table.nodata>

            </x-slot>
        </x-table.table>

        <div class="mt-5">
            @if($paginate != 'all')
                {{ $captains->links() }}
            @endif
        </div>
    </div>
    <!--end::Body-->
</div>
