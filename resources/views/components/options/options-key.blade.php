@props([
    'key'=>'',
    'value'=>'Select',
    'options'=>[],
    'selected'=>'',
    'val'=>'',
    'text'=>'',
    'trans'=>true,
])

<option value="{{ $key }}">{{__($value)}}</option>
@foreach($options as $opt)
    <option value="{{ $opt->$val }}">{{ $trans? __($opt->$text) : $opt->$text}}</option>
@endforeach


