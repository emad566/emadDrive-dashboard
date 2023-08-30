<div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg" x-data="{
    sweetDelete(id){
        Swal.fire({
            title: '<?php echo e(__('Are you sure?')); ?>',
            text: '<?php echo e(__('You will not be able to revert this!')); ?>',
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: '<?php echo e(__('Cancel')); ?>',
            confirmButtonText: '<?php echo e(__('Yes, delete it!')); ?>'
        }).then(function(result) {
            if (result.value) {
                window.Livewire.find('<?php echo e($_instance->getId()); ?>').destroy(id)
                window.addEventListener('alert-delete', function (){
                    Swal.fire(
                        '<?php echo e(__('Deleted!')); ?>',
                        '<?php echo e(__('Your item has been deleted.')); ?>',
                        'success'
                    )
                })

            }
        });
    }
}">
    <table class="table min-w-full divide-y divide-cool-gray-200">
        <thead class="thead-dark">
            <tr>
                <?php echo e($head); ?>

            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-cool-gray-200">
        <?php echo e($body); ?>

        </tbody>
    </table>
</div>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/table/table.blade.php ENDPATH**/ ?>