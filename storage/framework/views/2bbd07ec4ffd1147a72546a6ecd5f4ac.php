<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'wrapperClass' => '',
    'imgClass' => '',
    'src' => '',
    'title' => '',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'wrapperClass' => '',
    'imgClass' => '',
    'src' => '',
    'title' => '',
]); ?>
<?php foreach (array_filter(([
    'wrapperClass' => '',
    'imgClass' => '',
    'src' => '',
    'title' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="d-flex flex-column flex-center <?php echo e($wrapperClass); ?>">
    <!--begin::Image-->
    <div><img class="<?php echo e($imgClass); ?> w-100" src="<?php echo e($src); ?>" alt="<?php echo e($title); ?>"></div>
    <!--end::Image-->
    <!--begin::Text-->
    <div class="font-weight-bold text-dark-50 font-size-sm pt-4"><?php echo e($title); ?></div>
    <!--end::Text-->
</div>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/images/card-image.blade.php ENDPATH**/ ?>