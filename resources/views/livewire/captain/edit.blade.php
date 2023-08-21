<x-tabs.tab>
    <x-slot name="title">
        @php $icon = $captain->status > 0? 'fas fa-check' : 'fas fa-info' @endphp
        <x-tabs.title wire:click="tab('t1')" id="t1" :title="__('Basic Information')" :iconclass="$icon" :active="$tab" />
        @php $icon = $captain->vehicles->first()->status? 'fas fa-check' : 'fas fa-car' @endphp
        <x-tabs.title wire:click="tab('t2')" id="t2" :title="__('Vehicle Information')" :iconclass="$icon" :active="$tab" />
        @php $icon = $captain->status  > 2 ? 'fas fa-check' : 'fas fa-car-alt' @endphp
        <x-tabs.title wire:click="tab('t3')" id="t3" :title="__('Vehicle Images')" :iconclass="$icon" :active="$tab" />
        @php $icon = $captain->status  > 3 ? 'fas fa-check' : 'fas fa-credit-card' @endphp
        <x-tabs.title wire:click="tab('t4')" id="t4" :title="__('Bank')" :iconclass="$icon" :active="$tab" />
        @php $icon = $captain->status  > 3 ? 'fas fa-check' : 'fas fa-file' @endphp
        <x-tabs.title wire:click="tab('t5')" id="t5" :title="__('Extra Files')" :iconclass="$icon" :active="$tab" />
    </x-slot>

    <i class="fa-file"></i>

    <x-slot name="body">
        <x-tabs.body id="t1" :active="$tab">
            @livewire('captain.edit-basic-info', ['captain' => $captain])
        </x-tabs.body>
        <x-tabs.body id="t2" :active="$tab">
            @livewire('captain.vehicle-info', ['captain' => $captain])
        </x-tabs.body>
        <x-tabs.body id="t3" :active="$tab"> .... </x-tabs.body>
        <x-tabs.body id="t4" :active="$tab"> .... </x-tabs.body>
        <x-tabs.body id="t5" :active="$tab"> .... </x-tabs.body>
    </x-slot>
</x-tabs.tab>
