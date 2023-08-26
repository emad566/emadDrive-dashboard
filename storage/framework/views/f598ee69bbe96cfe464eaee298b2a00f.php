<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id'=>'',
    'name'=>'',
    'label'=>'',
    'required'=>'',
    'placeholder'=>'',
    'icon'=>'',
    'type'=>'text',
    'class'=>'',
    'hint'=>'',
    'wrapperClasses'=>'col-xs-12 col-md-4 pr-5',
    'labelClasses'=>'',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'id'=>'',
    'name'=>'',
    'label'=>'',
    'required'=>'',
    'placeholder'=>'',
    'icon'=>'',
    'type'=>'text',
    'class'=>'',
    'hint'=>'',
    'wrapperClasses'=>'col-xs-12 col-md-4 pr-5',
    'labelClasses'=>'',
]); ?>
<?php foreach (array_filter(([
    'id'=>'',
    'name'=>'',
    'label'=>'',
    'required'=>'',
    'placeholder'=>'',
    'icon'=>'',
    'type'=>'text',
    'class'=>'',
    'hint'=>'',
    'wrapperClasses'=>'col-xs-12 col-md-4 pr-5',
    'labelClasses'=>'',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<div id="<?php echo e($id); ?>" class="form-group <?php echo e($id); ?> <?php echo e($wrapperClasses); ?> ">
    <div class="input-icon">
        <?php if($label): ?> <label class="<?php echo e($labelClasses); ?>" for="<?php echo e($name); ?>"><?php echo e($label); ?> <span class="text-danger"><?php echo e($required); ?></span></label> <?php endif; ?>
        <input  id="<?php echo e($name); ?>" <?php echo e($attributes); ?> type="<?php echo e($type); ?>" name="<?php echo e($name); ?>" class="form-control <?php echo e($class); ?> <?php if($errors->first($name)): ?> outline outline-red-800 outline-1 <?php endif; ?>"  placeholder="<?php echo e($placeholder); ?>"/>
        <span><i class="<?php echo e($icon); ?> <?php if($label): ?> pt-8 <?php endif; ?>"></i></span>
    </div>
    <?php if($hint): ?> <span class="form-text text-muted"><?php echo e($hint); ?></span> <?php endif; ?>
    <?php if($errors->first($name)): ?> <span class="form-text text-danger"><?php echo e($errors->first($name)); ?></span> <?php endif; ?>
</div>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/form/input-icon.blade.php ENDPATH**/ ?>