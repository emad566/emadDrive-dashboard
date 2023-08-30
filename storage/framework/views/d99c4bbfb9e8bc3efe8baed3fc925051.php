

<!-- __BLOCK__ --><?php if($item): ?>
        <div class="row">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.switch-label','data' => ['parentid' => 'parent-'.e($item->parent_id).'','itemid' => 'item-'.e($item->id).'','xOn:change' => 'selectedPermissionsUpdated($el)','xModel' => 'selectedPermissions','class' => '','wrapperClasses' => 'row px-0 mb-3','label' => ''.e($item->name).' --- '.e($item->childes->count()).' ['.e($item->id).'] { '.e($item->parent_id).' }']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.switch-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['parentid' => 'parent-'.e($item->parent_id).'','itemid' => 'item-'.e($item->id).'','x-on:change' => 'selectedPermissionsUpdated($el)','x-model' => 'selectedPermissions','class' => '','wrapperClasses' => 'row px-0 mb-3','label' => ''.e($item->name).' --- '.e($item->childes->count()).' ['.e($item->id).'] { '.e($item->parent_id).' }']); ?><?php echo e($item->id); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
        <?php if($item->childes->count()>0): ?>
            <!-- __BLOCK__ --><?php $__currentLoopData = $item->childes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div x-show="selectedPermissions.includes(<?php echo e($item->id); ?>)"

                class="pl-10" style="border-<?php echo e((session()->get('locale') == 'ar')? 'right' : 'lift'); ?>: solid 2px #ccc"
            >
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.snippets.checkbox-cats','data' => ['allItems' => $allItems,'item' => $child]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('snippets.checkbox-cats'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['allItems' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($allItems),'item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($child)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!-- __ENDBLOCK__ -->
            <!-- __BLOCK__ --><?php if($item->parent && !$item->parent?->parent): ?> <div class="row w-100 h-2" style=""></div> <?php endif; ?> <!-- __ENDBLOCK__ -->
       <?php endif; ?> <!-- __ENDBLOCK__ -->
<?php endif; ?> <!-- __ENDBLOCK__ -->
<?php /**PATH D:\wamp64\www\atmo-ndash\resources\views/components/snippets/checkbox-cats.blade.php ENDPATH**/ ?>