@props([
    'id'=>'',
    'imageId'=>'',
    'name'=>'',
    'label'=>'',
    'required'=>'',
    'wrapperClasses'=>'col-xs-12 col-md-4',
    'labelClasses'=>'',
    'src'=>'',
    'style'=>'',
    'avatar'=>'avatar-item',
    'banner' => false,
    'label ' => '',
])



<div id="{{ $id }}"  class="form-group {{ $id }} {{ $wrapperClasses }}" >
    <label class="{{ $labelClasses }}" for="{{ $name }}"> {{ $required }} {{ $label }}
        <div class="{{ $avatar }}">

                <img id="{{ $imageId }}" width="150" height="150" style="{{ $style }}" alt="{{ $name }}"
                     src="{{ $src }}" class="img-fluid"
                     data-toggle="tooltip" title="{{ $name }}"
                     data-original-title="{{ $name }}">

            <div class="avatar-badge" title="{{ $name }}" data-toggle="tooltip"
                 data-original-title="{{ $name }}"><i class="fas fa-edit"></i></div>
        </div>
        <input  id="{{ $name }}" type="file"  {{ $attributes }} name="{{ $name }}" style="display: none"/>
    </label>
    @if($errors->first($name)) <span class="form-text text-danger">{{ $errors->first($name) }}</span> @endif
</div>
