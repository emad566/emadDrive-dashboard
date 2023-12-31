<x-slot name="title">{{ __('Users') }}</x-slot>
<x-slot name="header">{{  __('Users')  }}</x-slot>

<div class="card card-custom" x-data="{
    show: false,
    isCreate: false,
}">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">{{__("Users")}}
                <span class="d-block text-muted pt-2 font-size-sm">{{__("Show All")}}</span>
            </h3>
        </div>
        <div class="card-toolbar">
            <a wire:click.prevent="create" class="btn btn-primary font-weight-bolder" x-on:click="show=true; isCreate=true" >
                <i class="la la-plus"></i>{{__("New User")}}</a>
            <!--end::Button-->
        </div>
    </div>



    <div class="card-body table-responsive">
        <div class="row">
            <x-form.select wire:model.live="paginate" name="paginate" :label="__('Show')">
                <x-options.options key="all" value="All" :options="$paginate_list" selected="5"/>
            </x-form.select>
            <x-form.input-icon wire:model.live.debounce.500ms="search" name="search" :label="__('Search')" placeholder="{{ __('Search') }} {{ __('Mobile') }} - {{ __('Full Name') }} ..." icon="flaticon2-search-1 icon-md"/>
        </div>




        <x-table.table>
            <x-slot name="head">
                <x-table.heading>{{ __('#') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('mobile')" :direction="$sort_field === 'mobile'? $sort_direction : null">{{ __('Mobile') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('name')" :direction="$sort_field === 'name'? $sort_direction : null">{{ __('Full Name') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('email')" :direction="$sort_field === 'email'? $sort_direction : null">{{ __('Email') }}</x-table.heading>
                <x-table.heading>{{ __('Role') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('created_at')" :direction="$sort_field === 'created_at'? $sort_direction : null">{{ __('Created') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('status')" :direction="$sort_field === 'status'? $sort_direction : null">{{ __('Status') }}</x-table.heading>
                <x-table.heading sortable wire:click="sortBy('login')" :direction="$sort_field === 'login'? $sort_direction : null">{{ __('Online') }}</x-table.heading>
                <x-table.heading>{{ __('Actions') }}</x-table.heading>
            </x-slot>
            <x-slot name="body">
                @php $i=1 @endphp
                @foreach($users as $user)
                    <x-table.row wire:loading.class="opacity-50" wire:target="search">
                        <x-table.cell>
                            <x-snippets.avatar>{{ $i++ }}</x-snippets.avatar>
                        </x-table.cell>
                        <x-table.cell>{{ $user->mobile }}</x-table.cell>
                        <x-table.cell>{{ $user->name }}</x-table.cell>
                        <x-table.cell><p class="overflow-ellipsis max-w-100px truncate ">{{ $user->email }}</p></x-table.cell>
                        <x-table.cell>{{ $user->roles?->first()?->name }}</x-table.cell>
{{--                        <x-table.cell>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</x-table.cell>--}}
                        <x-table.cell>{{ $user->created_at }}</x-table.cell>
                        <x-table.cell>
                            <x-form.switch :checked="$user->status_switch" wire:click="status_switch({{ __($user->id) }})" >1</x-form.switch>
                        </x-table.cell>
                        <x-table.cell>
                            <x-snippets.online icon="warning">{{ \Carbon\Carbon::parse($user->login)->diffForHumans() }}</x-snippets.online>
                        </x-table.cell>
                        <x-table.cell>
                           <x-buttons.edit wire:click="edit({{ $user->id }}).live" x-on:click="show=true; isCreate=false"/>
                            <x-buttons.delete actionId="{{ $user->id }}" x-on:click="sweetDelete('{{ $user->id }}')" />
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


    @include('livewire.user.partials.create')
</div>
