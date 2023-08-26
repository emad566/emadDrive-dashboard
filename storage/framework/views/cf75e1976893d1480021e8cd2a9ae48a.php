<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id'=>'',
    'name'=>'',
    'label'=>'',
    'required'=>'',
    'class'=>'',
    'hint'=>'',
    'wrapperClasses'=>'col-xs-4=12 col-md-4',
    'labelClasses'=>'',
    'select2'=>false,
    'inputId'=>''
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'id'=>'',
    'name'=>'',
    'label'=>'',
    'required'=>'',
    'class'=>'',
    'hint'=>'',
    'wrapperClasses'=>'col-xs-4=12 col-md-4',
    'labelClasses'=>'',
    'select2'=>false,
    'inputId'=>''
]); ?>
<?php foreach (array_filter(([
    'id'=>'',
    'name'=>'',
    'label'=>'',
    'required'=>'',
    'class'=>'',
    'hint'=>'',
    'wrapperClasses'=>'col-xs-4=12 col-md-4',
    'labelClasses'=>'',
    'select2'=>false,
    'inputId'=>''
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div id="<?php echo e($id); ?>" class="form-group <?php echo e($id); ?> <?php echo e($wrapperClasses); ?> ">
    <?php if($label): ?> <label class="<?php echo e($labelClasses); ?>" for="<?php echo e($inputId); ?>"><?php echo e($label); ?> <span class="text-danger"><?php echo e($required); ?></span></label> <?php endif; ?>
    <select  id="<?php echo e($inputId); ?>" <?php echo e($attributes); ?> name="<?php echo e($name); ?>" class="form-control px-10 <?php if($select2): ?> select2 <?php endif; ?> <?php echo e($class); ?> <?php if($errors->first($name)): ?> outline outline-red-800 outline-1 <?php endif; ?>" >
        <?php echo e($slot); ?>

    </select>

    <?php if($hint): ?> <span class="form-text text-muted"><?php echo e($hint); ?></span> <?php endif; ?>
    <?php if($errors->first($name)): ?> <span class="form-text text-danger"><?php echo e($errors->first($name)); ?></span> <?php endif; ?>
</div>
<style>.select2-container{width: 100% !important;}</style>

<script>
    window.addEventListener('alert-show-model', function(){
        $('#<?php echo e($inputId); ?>').select2({
            placeholder: "<?php echo e(__('Select')); ?> <?php echo e($label); ?>",
        });

        $('#<?php echo e($inputId); ?>').on('change', function (e) {
            var data = $('#<?php echo e($inputId); ?>').select2("val");
            window.livewire.find('<?php echo e($_instance->id); ?>').set('<?php echo e($name); ?>', data);
        });
    })
</script>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/form/select2.blade.php ENDPATH**/ ?>