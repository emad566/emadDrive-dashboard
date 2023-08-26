<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'wrapperClasses'=>'col-3',
    'label'=>''
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'wrapperClasses'=>'col-3',
    'label'=>''
]); ?>
<?php foreach (array_filter(([
    'wrapperClasses'=>'col-3',
    'label'=>''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="<?php echo e($wrapperClasses); ?>">
    <span class="switch switch-sm switch-icon pl-5">
        <label>
            <input <?php echo e($attributes); ?> type="checkbox" value="<?php echo e($slot); ?>" />
            <span></span>
        </label>
    </span>
    <label class="form-label"><?php echo e($label); ?></label>
</div>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/form/switch-label.blade.php ENDPATH**/ ?>