<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['active'=>'', 'id'=>'']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['active'=>'', 'id'=>'']); ?>
<?php foreach (array_filter((['active'=>'', 'id'=>'']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php $active = $id == $active? 'active' : '' ?>

<div class="tab-pane fade show <?php echo e($active); ?>" id="<?php echo e($id); ?>" role="tabpanel" aria-labelledby="<?php echo e($id); ?>">
    <?php echo e($slot); ?>

</div>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/tabs/body.blade.php ENDPATH**/ ?>