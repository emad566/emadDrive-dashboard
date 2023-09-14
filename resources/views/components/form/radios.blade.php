@props([
    'name'=>'',
    'label'=>'',
    'options'=>[],
    'values'=>[],
    'checkedValue'=> '',
    'hint' => '',
    'wrapperClasses'=>'col-xs-12 col-md-4 pr-5',

])

<div class="form-group {{ $wrapperClasses }}">
    <label>{{ $label }}</label>
    <div class="radio-inline">
        @for($i=0; $i<count($options); $i++)
            @php $checked = $values[$i] === $checkedValue? 'checked="checked"' : ''  @endphp
            <label class="radio radio-lg">
                <input wire:model.blur="gender" type="radio" value="{{ $values[$i] }}" {{ $checked }} name="{{ $name }}" class="transition-all duration-1000"/>
                <span></span>
                {{ $options[$i] }}
            </label>
        @endfor
    </div>
    @if($hint) <span class="form-text text-muted">{{ $hint }}</span> @endif
    @if($errors->first($name)) <span class="form-text text-danger">{{ $errors->first($name) }}</span> @endif

</div>
