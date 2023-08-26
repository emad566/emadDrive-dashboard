@props([
    'wrapperClasses'=>'',
    'label'=>''
])
<span class="switch switch-outline switch-sm switch-icon switch-primary {{ $wrapperClasses }}">
    <label>
        <input {{ $attributes }} type="checkbox" {{ $slot }}/>
        <span>{{ $label }}</span>
    </label>
</span>
