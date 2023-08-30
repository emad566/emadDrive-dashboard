<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id'=>'',
    'name'=>'',
    'label'=>'',
    'required'=>'',
    'placeholder'=>'',
    'icon'=>'fas fa-calendar-alt',
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
    'icon'=>'fas fa-calendar-alt',
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
    'icon'=>'fas fa-calendar-alt',
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

<div

    id="<?php echo e($id); ?>" class="form-group  <?php echo e($id); ?> <?php echo e($wrapperClasses); ?>"
    x-data="{ value: <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?>.live, picker: undefined }"
    x-init="new Pikaday({ field: $refs.input, format: 'Y-MM-DD', onOpen() { this.setDate($refs.input.value) } })"
    x-on:change="value = $event.target.value"
>
    <div class="input-icon">
        <!-- __BLOCK__ --><?php if($label): ?> <label class="<?php echo e($labelClasses); ?>" for="<?php echo e($name); ?>"><?php echo e($label); ?> <span class="text-danger"><?php echo e($required); ?></span></label> <?php endif; ?> <!-- __ENDBLOCK__ -->
        <input x-ref="input" x-bind:value="value"  id="<?php echo e($name); ?>" <?php echo e($attributes); ?> type="<?php echo e($type); ?>" name="<?php echo e($name); ?>" class="form-control <?php echo e($class); ?> <?php if($errors->first($name)): ?> outline outline-red-800 outline-1 <?php endif; ?>"  placeholder="<?php echo e($placeholder); ?>"/>
        <span><i class="<?php echo e($icon); ?> <?php if($label): ?> pt-8 <?php endif; ?>"></i></span>
    </div>
    <!-- __BLOCK__ --><?php if($hint): ?> <span class="form-text text-muted"><?php echo e($hint); ?></span> <?php endif; ?> <!-- __ENDBLOCK__ -->
    <!-- __BLOCK__ --><?php if($errors->first($name)): ?> <span class="form-text text-danger"><?php echo e($errors->first($name)); ?></span> <?php endif; ?> <!-- __ENDBLOCK__ -->
</div>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/form/date.blade.php ENDPATH**/ ?>