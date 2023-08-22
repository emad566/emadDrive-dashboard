@props([
    'id'=>'',
    'name'=>'',
    'label'=>'',
    'required'=>'',
    'class'=>'',
    'hint'=>'',
    'wrapperClasses'=>'col-xs-4=12 col-md-4',
    'labelClasses'=>'col-2 col-form-label',
    'inputWrapperClasses'=>'col-10',
])


<div id="{{ $id }}" class="form-group {{ $id }} {{ $wrapperClasses }} row">
    @if($label) <label class="{{ $labelClasses }}" for="{{ $name }}">{{ $label }} <span class="text-danger">{{ $required }}</span></label> @endif
    <div class="{{ $inputWrapperClasses }}">
        <select  id="{{ $name }}" {{ $attributes }} name="{{ $name }}" class="form-control px-10 {{ $class }} @if($errors->first($name)) outline outline-red-800 outline-1 @endif" >
              {{ $slot }}
        </select>
    </div>
    @if($hint) <span class="form-text text-muted">{{ $hint }}</span> @endif
    @if($errors->first($name)) <span class="form-text text-danger">{{ $errors->first($name) }}</span> @endif
</div>
