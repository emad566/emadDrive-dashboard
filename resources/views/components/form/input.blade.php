@props([
    'id'=>'',
    'name'=>'',
    'label'=>'',
    'required'=>'',
    'placeholder'=>'',
    'type'=>'text',
    'class'=>'',
    'hint'=>'',
    'wrapperClasses'=>'col-xs-12 col-md-4',
    'labelClasses'=>'',
])


<div id="{{ $id }}" class="form-group {{ $id }} {{ $wrapperClasses }}">
    @if($label) <label class="{{ $labelClasses }}" for="{{ $name }}">{{ $label }} <span class="text-danger">{{ $required }}</span></label> @endif
    <input  id="{{ $name }}" {{ $attributes }} type="{{ $type }}" name="{{ $name }}" class="form-control  {{ $class }} @if($errors->first($name)) outline outline-red-800 outline-1 @endif"  placeholder="{{ $placeholder }}"/>
    @if($hint) <span class="form-text text-muted">{{ $hint }}</span> @endif
    @if($errors->first($name)) <span class="form-text text-danger">{{ $errors->first($name) }}</span> @endif
</div>


{{--<div class="form-group row">--}}
{{--    <label  class="col-2 col-form-label">Text</label>--}}
{{--    <div class="col-10">--}}
{{--        <input class="form-control" type="text" value="Artisanal kale" id="example-text-input"/>--}}
{{--    </div>--}}
{{--</div>--}}
