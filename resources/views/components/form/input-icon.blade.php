@props([
    'id'=>'',
    'name'=>'',
    'label'=>'',
    'required'=>'',
    'placeholder'=>'',
    'icon'=>'',
    'type'=>'text',
    'class'=>'',
    'hint'=>'',
    'wrapperClasses'=>'col-xs-12 col-md-4 pr-5',
    'labelClasses'=>'',
])


<div id="{{ $id }}" class="form-group {{ $id }} {{ $wrapperClasses }} ">
    <div class="input-icon">
        @if($label) <label class="{{ $labelClasses }}" for="{{ $name }}">{{ $label }} <span class="text-danger">{{ $required }}</span></label> @endif
        <input  id="{{ $name }}" {{ $attributes }} type="{{ $type }}" name="{{ $name }}" class="form-control {{ $class }} @if($errors->first($name)) outline outline-red-800 outline-1 @endif"  placeholder="{{ $placeholder }}"/>
        <span><i class="{{ $icon }} @if($label) pt-8 @endif"></i></span>
    </div>
    @if($hint) <span class="form-text text-muted">{{ $hint }}</span> @endif
    @if($errors->first($name)) <span class="form-text text-danger">{{ $errors->first($name) }}</span> @endif
</div>
