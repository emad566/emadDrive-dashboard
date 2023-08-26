@props([
    'key'=>'',
    'value'=>'Select',
    'options'=>[],
    'selected'=>'',
    'val'=>'',
    'text'=>'',
])

<option value="{{ $key }}">{{__($value)}}</option>
@foreach($options as $opt)
    <option value="{{ $opt->$val }}">{{__($opt->$text)}}</option>
@endforeach


