<div x-data="{
    name:  <?php if ((object) ('name') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('name'->value()); ?>')<?php echo e('name'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('name'); ?>')<?php endif; ?>,
    selectedPermissions: <?php if ((object) ('selectedPermissionIds') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('selectedPermissionIds'->value()); ?>')<?php echo e('selectedPermissionIds'->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e('selectedPermissionIds'); ?>')<?php endif; ?>,

    selectedPermissionsUpdated(el){
        this.selectedPermissions = this.selectedPermissions.map(str =>  parseInt(str, 10));

        if(!el.checked){
            var itemId = el.getAttribute('itemid');
            this.getChildes(el.value, 0)
        }
    },

    getChildes(itemid, i){
        var elms = document.querySelectorAll(`[parentid='parent-${itemid}']`)
        for (var i = i; i < elms.length; ++i) {
            this.remove([elms[i].value])
            this.getChildes(elms[i].value, 0)
        }
    },

    remove (ids){
        this.selectedPermissions = this.selectedPermissions.filter((id) => !(ids.includes(id+'')));
    },

    save(){
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('name', this.name)
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('selectedPermissionIds', this.selectedPermissions)
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').save()
    }


}">

    <?php echo $__env->make('livewire.role.partials.from', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/livewire/role/partials/create.blade.php ENDPATH**/ ?>