@props([
    'key'=>'',
    'value'=>'Select',
    'options'=>[],
    'selected'=>'',
    'trans'=>'',
])

<option value="{{ $key }}">{{__($value)}}</option>
@foreach($options as $opt)
    <option value="{{ $opt }}">{{ $trans? __($opt) : $opt}}</option>
@endforeach


