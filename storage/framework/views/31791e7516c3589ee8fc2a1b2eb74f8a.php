<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'icon'=>'success'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'icon'=>'success'
]); ?>
<?php foreach (array_filter(([
    'icon'=>'success'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<span class="label label-lg label-light-<?php echo e($icon); ?> label-inline">
    <div class="symbol symbol-100 m-5">
        <i class="symbol-badge bg-<?php echo e($icon); ?>"></i>
    </div>
    <?php echo e($slot); ?>

</span>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/snippets/online.blade.php ENDPATH**/ ?>