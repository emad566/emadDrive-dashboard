@props([
    'wrapperClasses'=>'col-3',
    'label'=>'',
    'checked'=>''
])

<div class="{{ $wrapperClasses }}">
    <span class="switch switch-sm switch-icon pl-5">
        <label>
            <input {{ $attributes }} {{ $checked }} type="checkbox" value="{{ $slot }}" />
            <span></span>
        </label>
    </span>
    <label class="form-label">{{ $label }}</label>
</div>
