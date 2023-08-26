<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'wrapperClasses'=>'',
    'label'=>''
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'wrapperClasses'=>'',
    'label'=>''
]); ?>
<?php foreach (array_filter(([
    'wrapperClasses'=>'',
    'label'=>''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<span class="switch switch-outline switch-sm switch-icon switch-primary <?php echo e($wrapperClasses); ?>">
    <label>
        <input <?php echo e($attributes); ?> type="checkbox" <?php echo e($slot); ?>/>
        <span><?php echo e($label); ?></span>
    </label>
</span>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/form/switch.blade.php ENDPATH**/ ?>