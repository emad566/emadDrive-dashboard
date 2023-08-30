<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'url'=>'#',
    'color'=>'text-blue-500',
    'size'=>'lg'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'url'=>'#',
    'color'=>'text-blue-500',
    'size'=>'lg'
]); ?>
<?php foreach (array_filter(([
    'url'=>'#',
    'color'=>'text-blue-500',
    'size'=>'lg'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<a href="<?php echo e($url); ?>" data-toggle="tooltip" title="Hire" <?php echo e($attributes); ?>>
    <i class="fas fa-paper-plane font-size-h1-<?php echo e($size); ?> <?php echo e($color); ?> "></i>
</a>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/buttons/icon.blade.php ENDPATH**/ ?>