<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'label'=>'',
    'value'=>'',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'label'=>'',
    'value'=>'',
]); ?>
<?php foreach (array_filter(([
    'label'=>'',
    'value'=>'',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<div class="w-1/3 pr-5">
    <p><?php echo e($label); ?> <span class="form-text text-muted"><?php echo e($value); ?></span> </p>
</div>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/infos/info.blade.php ENDPATH**/ ?>