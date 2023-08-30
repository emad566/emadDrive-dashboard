<x-slot name="title">{{ __('Edit') }} {{ __('Captain') }}</x-slot>
<x-slot name="header">{{ __('Edit') }} {{  __('Captain')  }}</x-slot>

<div>
    <x-tabs.tab>
        <x-slot name="tabTitle">

            @php $icon = $captain->status > 0? 'fas fa-check' : 'fas fa-info' @endphp
            <x-tabs.title wire:click="tabId('t1')" id="t1" :title="__('Basic Information')" :iconclass="$icon" :active="$tab" />
            @php $icon = $captain->vehicles->first()->status? 'fas fa-check' : 'fas fa-car' @endphp
            <x-tabs.title wire:click="tabId('t2')" id="t2" :title="__('Vehicle Information')" :iconclass="$icon" :active="$tab" />
            @php $icon = $captain->vehicles->first()->status_image ? 'fas fa-check' : 'fas fa-car-alt' @endphp
            <x-tabs.title wire:click="tabId('t3')" id="t3" :title="__('Vehicle Images')" :iconclass="$icon" :active="$tab" />
            @php $icon = $captain->bankAccounts?->first()?->status? 'fas fa-check' : 'fas fa-credit-card' @endphp
            <x-tabs.title wire:click="tabId('t4')" id="t4" :title="__('Bank')" :iconclass="$icon" :active="$tab" />
            @php $icon = $captain->status  > 3 ? 'fas fa-check' : 'fas fa-file' @endphp
            <x-tabs.title wire:click="tabId('t5')" id="t5" :title="__('Extra Files')" :iconclass="$icon" :active="$tab" />
        </x-slot>

        <x-slot name="cardTitle" >
            @if($captain->status  >0 && $captain->vehicles->first()->status >0 && $captain->vehicles->first()->status_image >0)
                <x-form.switch-label wire:model.live="isActive"  wrapperClasses="row" label="{{__('active')}}">1</x-form.switch-label>
            @endif
        </x-slot>

        <x-slot name="body">
            <x-tabs.body id="t1" :active="$tab">
                @livewire('captain.edit-basic-info', ['captain' => $captain])
            </x-tabs.body>
            <x-tabs.body id="t2" :active="$tab">
                @livewire('captain.vehicle-info', ['captain' => $captain])
            </x-tabs.body>
            <x-tabs.body id="t3" :active="$tab">
                @livewire('captain.vehicle-images', ['captain' => $captain])
            </x-tabs.body>
            <x-tabs.body id="t4" :active="$tab">
                @livewire('captain.bank-info', ['captain' => $captain])
            </x-tabs.body>
            <x-tabs.body id="t5" :active="$tab"> .... </x-tabs.body>
        </x-slot>
    </x-tabs.tab>
    <span></span>
</div>
