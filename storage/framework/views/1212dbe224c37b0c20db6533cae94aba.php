<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'size'=>'lg',
    'mode'=>'light-warning',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'size'=>'lg',
    'mode'=>'light-warning',
]); ?>
<?php foreach (array_filter(([
    'size'=>'lg',
    'mode'=>'light-warning',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<span class="label label-<?php echo e($size); ?> label-<?php echo e($mode); ?> label-inline"><?php echo e($slot); ?></span>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/snippets/label-light.blade.php ENDPATH**/ ?>