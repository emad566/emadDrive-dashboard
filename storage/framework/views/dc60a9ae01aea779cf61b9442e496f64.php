<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'target'=>'',
    'class'=>'btn btn-primary btn-md w-100px mx-5',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'target'=>'',
    'class'=>'btn btn-primary btn-md w-100px mx-5',
]); ?>
<?php foreach (array_filter(([
    'target'=>'',
    'class'=>'btn btn-primary btn-md w-100px mx-5',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="d-flex justify-content-end mx-5">
    <button type="submit" class="<?php echo e($class); ?>"><?php echo e($slot); ?> </button>
    <i class="fas fa-spinner rotate" wire:loading wire:target="<?php echo e($target); ?>"></i>
</div>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/buttons/submit.blade.php ENDPATH**/ ?>