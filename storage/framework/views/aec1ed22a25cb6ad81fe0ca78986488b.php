<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'key'=>'',
    'value'=>'Select',
    'options'=>[],
    'selected'=>'',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'key'=>'',
    'value'=>'Select',
    'options'=>[],
    'selected'=>'',
]); ?>
<?php foreach (array_filter(([
    'key'=>'',
    'value'=>'Select',
    'options'=>[],
    'selected'=>'',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<option value="<?php echo e($key); ?>"><?php echo e(__($value)); ?></option>
<!-- __BLOCK__ --><?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($opt); ?>"><?php echo e(__($opt)); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- __ENDBLOCK__ -->


<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/options/options.blade.php ENDPATH**/ ?>