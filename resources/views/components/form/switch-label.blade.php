@props([
    'wrapperClasses'=>'col-3',
    'label'=>''
])

<div class="{{ $wrapperClasses }}">
    <span class="switch switch-sm switch-icon pl-5">
        <label>
            <input {{ $attributes }} type="checkbox" value="{{ $slot }}" />
            <span></span>
        </label>
    </span>
    <label class="form-label">{{ $label }}</label>
</div>
