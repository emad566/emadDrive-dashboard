<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'name'=>'',
    'label'=>'',
    'options'=>[],
    'values'=>[],
    'checkedValue'=> '',
    'hint' => '',
    'wrapperClasses'=>'col-xs-12 col-md-4 pr-5',

]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'name'=>'',
    'label'=>'',
    'options'=>[],
    'values'=>[],
    'checkedValue'=> '',
    'hint' => '',
    'wrapperClasses'=>'col-xs-12 col-md-4 pr-5',

]); ?>
<?php foreach (array_filter(([
    'name'=>'',
    'label'=>'',
    'options'=>[],
    'values'=>[],
    'checkedValue'=> '',
    'hint' => '',
    'wrapperClasses'=>'col-xs-12 col-md-4 pr-5',

]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="form-group <?php echo e($wrapperClasses); ?>">
    <label><?php echo e($label); ?></label>
    <div class="radio-inline">
        <?php for($i=0; $i<count($options); $i++): ?>
            <?php $checked = $values[$i] === $checkedValue? 'checked="checked"' : ''  ?>
            <label class="radio radio-lg">
                <input wire:model.lazy="gender" type="radio" value="<?php echo e($values[$i]); ?>" <?php echo e($checked); ?> name="<?php echo e($name); ?>" class="transition-all duration-1000"/>
                <span></span>
                <?php echo e($options[$i]); ?>

            </label>
        <?php endfor; ?>
    </div>
    <?php if($hint): ?> <span class="form-text text-muted"><?php echo e($hint); ?></span> <?php endif; ?>
    <?php if($errors->first($name)): ?> <span class="form-text text-danger"><?php echo e($errors->first($name)); ?></span> <?php endif; ?>

</div>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/form/radios.blade.php ENDPATH**/ ?>