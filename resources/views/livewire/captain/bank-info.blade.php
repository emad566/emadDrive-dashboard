<form wire:submit.prevent="save">
    @if($bank)
    <div class="d-flex flex-wrap">
        <x-form.input wire:model.lazy="bank_name" name="bank_name" :label="__('Bank Name')" :placeholder="__('Bank Name')"/>
        <x-form.input wire:model.lazy="iban_number" name="iban_number" :label="__('Iban Number')" :placeholder="__('Iban Number')"/>
        <x-form.input wire:model.lazy="account_name" name="account_name" :label="__('Account Name')" :placeholder="__('Account Name')"/>
        <x-form.input wire:model.lazy="account_number" name="account_number" :label="__('Account Number')" :placeholder="__('Account Number')"/>
    </div>

    <div class="d-flex flex-wrap justify-content-end">
        <x-buttons.submit target="save" >{{ __('Save') }}</x-buttons.submit>
        <x-buttons.save wire:click="activate" target="activate" >{{ __('Accept') }}</x-buttons.save>
    </div>
    @endif
</form>
