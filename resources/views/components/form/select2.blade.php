@props([
    'id'=>'',
    'name'=>'',
    'label'=>'',
    'required'=>'',
    'class'=>'',
    'hint'=>'',
    'wrapperClasses'=>'col-xs-4=12 col-md-4',
    'labelClasses'=>'',
    'select2'=>false,
    'inputId'=>''
])

<div id="{{ $id }}" class="form-group {{ $id }} {{ $wrapperClasses }}">

    @if($label) <label class="{{ $labelClasses }}" for="{{ $inputId }}">{{ $label }} <span class="text-danger">{{ $required }}</span></label> @endif
    <select  id="{{ $inputId }}" {{ $attributes }} name="{{ $name }}" class="form-control px-10 @if($select2)  @endif {{ $class }} @if($errors->first($name)) outline outline-red-800 outline-1 @endif" >
        {{ $slot }}
    </select>

    @if($hint) <span class="form-text text-muted">{{ $hint }}</span> @endif
    @if($errors->first($name)) <span class="form-text text-danger">{{ $errors->first($name) }}</span> @endif
</div>
<style>.select2-container{width: 100% !important;}</style>

<script>
    {{--window.addEventListener('alert-show-model', function(){--}}
    {{--    $('#{{ $inputId }}').select2({--}}
    {{--        placeholder: "{{ __('Select') }} {{ $label }}",--}}
    {{--    });--}}

    {{--    $('#{{ $inputId }}').on('change', function (e) {--}}
    {{--        var data = $('#{{ $inputId }}').select2("val");--}}
    {{--        @this.set('{{ $name }}', data);--}}
    {{--    });--}}
    {{--})--}}
</script>
