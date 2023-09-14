@props([
    'wrapperClasses'=>'',
    'label'=>'',
    'checked'=>'',

])
<span class="switch switch-outline switch-sm switch-icon switch-primary {{ $wrapperClasses }}">
    <label>
        <input {{ $attributes }} {{ $checked }} type="checkbox" value="{{ $slot }}"/>
        <span>{{ $label }}</span>
    </label>
</span>
