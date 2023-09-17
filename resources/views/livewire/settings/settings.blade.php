<x-slot name="title">{{ __('Settings') }}</x-slot>
<x-slot name="header">{{ __('Settings') }}</x-slot>


<div class="card card-custom" x-data="{
    init(){
        @foreach($items as $item)
            this.keys[{{ $item->id }}] = '{{ $item->value }}';
        @endforeach
    },
    show: false,
    isCreate: false,
    keys:[],
    @foreach($items as $item)
        {{ $item->key }} : '{{ $item->value }}',
    @endforeach

    save(){
        @foreach($items as $item)
            this.keys[{{ $item->id }}] = this.{{ $item->key }};
        @endforeach
        @this.save(this.keys)
    }
}">
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">{{__("Settings")}}
                <span class="d-block text-muted pt-2 font-size-sm">{{__("General Settings")}}</span>
            </h3>
        </div>

    </div>

    <div class="card-body" x-data="{
        saveData(id, key){
            var value = document.getElementById(key).value
            @this.save(id, value)
        }
    }">
        <form x-on:submit.prevent="save">
            <div class="row">
            @foreach($items as $item)
                <x-form.input   x-model="{{ $item->key }}" :name="$item->key" :label="$item->getLangKey('label')" :hint="$item->getLangKey('description')" :placeholder="$item->getLangKey('label')" wrapperClasses="col-lg-6 col-md-12"/>
            @endforeach
            </div>
            <div class="d-flex flex-wrap justify-content-end">
                <x-buttons.save wire:click="cancel" target="cancel" x-on:click="show=false">{{ __('Reset') }}</x-buttons.save>
                <x-buttons.submit target="save" >{{ __('Save') }}</x-buttons.submit>
            </div>
        </form>
    </div>
</div>
