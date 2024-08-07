<div>
    <?php if (isset($component)) { $__componentOriginal06b678ea6fc36cc4d04471936415ef64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal06b678ea6fc36cc4d04471936415ef64 = $attributes; } ?>
<?php $component = App\View\Components\Section::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Section::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php if (isset($component)) { $__componentOriginalf951f7fec93fac767559c723f013122e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf951f7fec93fac767559c723f013122e = $attributes; } ?>
<?php $component = App\View\Components\TableSkeleton::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('table-skeleton'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\TableSkeleton::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf951f7fec93fac767559c723f013122e)): ?>
<?php $attributes = $__attributesOriginalf951f7fec93fac767559c723f013122e; ?>
<?php unset($__attributesOriginalf951f7fec93fac767559c723f013122e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf951f7fec93fac767559c723f013122e)): ?>
<?php $component = $__componentOriginalf951f7fec93fac767559c723f013122e; ?>
<?php unset($__componentOriginalf951f7fec93fac767559c723f013122e); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal06b678ea6fc36cc4d04471936415ef64)): ?>
<?php $attributes = $__attributesOriginal06b678ea6fc36cc4d04471936415ef64; ?>
<?php unset($__attributesOriginal06b678ea6fc36cc4d04471936415ef64); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal06b678ea6fc36cc4d04471936415ef64)): ?>
<?php $component = $__componentOriginal06b678ea6fc36cc4d04471936415ef64; ?>
<?php unset($__componentOriginal06b678ea6fc36cc4d04471936415ef64); ?>
<?php endif; ?>
</div>
<?php /**PATH D:\RS UMM\Inventaris Alkes\inventory-RS\resources\views/livewire/testing-page.blade.php ENDPATH**/ ?>