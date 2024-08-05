<div
    class="flex flex-col"
    <?php if($deferLoading): ?> wire:init="fetchDatasource" <?php endif; ?>
>
    <div
        id="power-grid-table-container"
        class="<?php echo e(data_get($theme, 'table.containerClass', '-my-2 overflow-x-auto sm:-mx-3 lg:-mx-8')); ?>"
        style="<?php echo e(data_get($theme, 'table.containerStyle')); ?>"
    >
        <div
            id="power-grid-table-base"
            class="<?php echo e(data_get($theme, 'table.baseClass', 'p-3 align-middle inline-block min-w-full w-full sm:px-6 lg:px-8')); ?>"
            style="<?php echo e(data_get($theme, 'table.baseStyle')); ?>"
        >

            <?php echo $__env->make(data_get($theme, 'layout.header'), [
                'enabledFilters' => $enabledFilters,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php if(config('livewire-powergrid.filter') === 'outside'): ?>
                <?php
                    $filtersFromColumns = collect($columns)
                        ->filter(fn($column) => filled($column->filters));
                ?>

                <!--[if BLOCK]><![endif]--><?php if($filtersFromColumns->count() > 0): ?>
                    <?php if (isset($component)) { $__componentOriginal98b22e53a70aa57b1b8cc690c0d51ee5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal98b22e53a70aa57b1b8cc690c0d51ee5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-powergrid::components.frameworks.tailwind.filter','data' => ['enabledFilters' => $enabledFilters,'tableName' => $tableName,'columns' => $columns,'filtersFromColumns' => $filtersFromColumns,'theme' => $theme]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('livewire-powergrid::frameworks.tailwind.filter'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['enabled-filters' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($enabledFilters),'tableName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tableName),'columns' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($columns),'filtersFromColumns' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($filtersFromColumns),'theme' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($theme)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal98b22e53a70aa57b1b8cc690c0d51ee5)): ?>
<?php $attributes = $__attributesOriginal98b22e53a70aa57b1b8cc690c0d51ee5; ?>
<?php unset($__attributesOriginal98b22e53a70aa57b1b8cc690c0d51ee5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal98b22e53a70aa57b1b8cc690c0d51ee5)): ?>
<?php $component = $__componentOriginal98b22e53a70aa57b1b8cc690c0d51ee5; ?>
<?php unset($__componentOriginal98b22e53a70aa57b1b8cc690c0d51ee5); ?>
<?php endif; ?>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <div
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'overflow-auto' => $readyToLoad,
                    'overflow-hidden' => !$readyToLoad,
                    data_get($theme, 'table.divClass'),
                ]); ?>"
                style="<?php echo e(data_get($theme, 'table.divStyle')); ?>"
            >
                <?php echo $__env->make($table, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <?php echo $__env->make(data_get($theme, 'footer.view'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php /**PATH D:\RS UMM\inventaris\vendor\power-components\livewire-powergrid\src\Providers/../../resources/views/components/frameworks/tailwind/table-base.blade.php ENDPATH**/ ?>