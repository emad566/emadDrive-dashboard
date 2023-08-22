@props([
    'key'=>'',
    'value'=>'Select',
    'options'=>[],
    'selected'=>'',
])

<option value="{{ $key }}">{{__($value)}}</option>
@foreach($options as $opt)
    <option value="{{ $opt }}">{{__($opt)}}</option>
@endforeach


