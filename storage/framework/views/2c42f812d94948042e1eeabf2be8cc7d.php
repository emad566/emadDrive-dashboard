


<div class="row">
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.input','data' => ['wire:model' => 'permission_search','name' => 'permission_search','label' => __('Permissions'),'placeholder' =>  __('Permissions') . ' ... ' . __('Search') . ' ... ' ,'wrapperClasses' => 'col-12']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'permission_search','name' => 'permission_search','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Permissions')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute( __('Permissions') . ' ... ' . __('Search') . ' ... ' ),'wrapperClasses' => 'col-12']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    <i class="fas fa-spinner rotate" wire:loading ></i>

</div>

<div class="row">

    <?php if($errors->first('selectedPermissionIds')): ?> <span class="form-text text-danger"><?php echo e($errors->first('selectedPermissionIds')); ?></span> <?php endif; ?>


    <div class="scroll scroll-pull w-100 h-300px" data-scroll="true" data-suppress-scroll-x="false" data-swipe-easing="true" >
        <div class="pl-10 " >

            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.snippets.checkbox-cat-list','data' => ['items' => $permissions]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('snippets.checkbox-cat-list'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($permissions)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
    </div>

</div>
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/livewire/role/partials/select-permissions.blade.php ENDPATH**/ ?>