<div x-data="{
    name:  <?php if ((object) ('roleEdit.name') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('roleEdit.name'->value()); ?>')<?php echo e('roleEdit.name'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('roleEdit.name'); ?>')<?php endif; ?>.defer,
    selectedPermissions: <?php if ((object) ('selectedPermissionIds') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('selectedPermissionIds'->value()); ?>')<?php echo e('selectedPermissionIds'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('selectedPermissionIds'); ?>')<?php endif; ?>.defer,

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
        window.livewire.find('<?php echo e($_instance->id); ?>').set('roleEdit.name', this.name)
        window.livewire.find('<?php echo e($_instance->id); ?>').set('selectedPermissionIds', this.selectedPermissions)
        window.livewire.find('<?php echo e($_instance->id); ?>').save()
    }


}">

    <?php echo $__env->make('livewire.role.partials.from', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/livewire/role/partials/create.blade.php ENDPATH**/ ?>