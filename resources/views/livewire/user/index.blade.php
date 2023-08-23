<div class="card card-custom">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">{{__("Users")}}
                <span class="d-block text-muted pt-2 font-size-sm">{{__("Show All")}}</span>
            </h3>
        </div>
        <div class="card-toolbar">
            <a href="" class="btn btn-primary font-weight-bolder"  >
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
</div>
