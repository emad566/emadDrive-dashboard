<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'class'=>'sweetDelete'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'class'=>'sweetDelete'
]); ?>
<?php foreach (array_filter(([
    'class'=>'sweetDelete'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<script>
    $(".<?php echo e($class); ?>").click(function(e) {
        Swal.fire({
            title: "<?php echo e(__("Are you sure?")); ?>",
            text: "<?php echo e(__("You will not be able to revert this!")); ?>",
            icon: "warning",
            showCancelButton: true,
            cancelButtonText: "<?php echo e(__("Cancel")); ?>",
            confirmButtonText: "<?php echo e(__("Yes, delete it!")); ?>"
        }).then(function(result) {
        if (result.value) {
                var userId = e.target.getAttribute('action-id');
                window.livewire.find('<?php echo e($_instance->id); ?>').destroy(userId)
                window.addEventListener('alert-delete', function (){
                    Swal.fire(
                        "<?php echo e(__("Deleted!")); ?>",
                        "<?php echo e(__("Your item has been deleted.")); ?>",
                        "success"
                    )
                })

            }
        });
    });
</script>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/sweet/delete.blade.php ENDPATH**/ ?>