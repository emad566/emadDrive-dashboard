<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'active'=>'',
    'id'=>'',
    'iconclass'=>'',
    'title'=>'',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'active'=>'',
    'id'=>'',
    'iconclass'=>'',
    'title'=>'',
]); ?>
<?php foreach (array_filter(([
    'active'=>'',
    'id'=>'',
    'iconclass'=>'',
    'title'=>'',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php $active = $id == $active? 'active' : '' ?>
<li class="nav-item">
    <a <?php echo e($attributes); ?> class="nav-link <?php echo e($active); ?>" data-toggle="tab" href="#<?php echo e($id); ?>">
        <span class="nav-icon"><i class="<?php echo e($iconclass); ?>"></i></span>
        <span class="nav-text"><?php echo e($title); ?></span>
    </a>
</li>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/tabs/title.blade.php ENDPATH**/ ?>