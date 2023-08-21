@props([
    'id'=>'',
    'name'=>'',
    'label'=>'',
    'required'=>'',
    'class'=>'',
    'hint'=>'',
    'wrapperClasses'=>'',
])


<div id="{{ $id }}" class="form-group {{ $id }} {{ $wrapperClasses }} ">
    @if($label) <label for="{{ $name }}">{{ $label }} <span class="text-danger">{{ $required }}</span></label> @endif
    <select  id="{{ $name }}" {{ $attributes }} name="{{ $name }}" class="form-control px-10 {{ $class }} @if($errors->first($name)) outline outline-red-800 outline-1 @endif" >
          {{ $slot }}
    </select>

    @if($hint) <span class="form-text text-muted">{{ $hint }}</span> @endif
    @if($errors->first($name)) <span class="form-text text-danger">{{ $errors->first($name) }}</span> @endif
</div>
