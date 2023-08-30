<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'target'=>'',
    'class'=>'btn btn-bg-warning btn-md w-100px',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'target'=>'',
    'class'=>'btn btn-bg-warning btn-md w-100px',
]); ?>
<?php foreach (array_filter(([
    'target'=>'',
    'class'=>'btn btn-bg-warning btn-md w-100px',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="d-flex justify-content-end mx-5">
    <button <?php echo e($attributes); ?> type="button" class="<?php echo e($class); ?>"><?php echo e($slot); ?> </button>
    <i <?php echo e($attributes); ?> class="fas fa-spinner rotate d-none" wire:loading.class.remove="d-none"></i>

</div>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/buttons/save.blade.php ENDPATH**/ ?>