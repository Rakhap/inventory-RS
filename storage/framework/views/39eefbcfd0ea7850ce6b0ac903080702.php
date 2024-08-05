<button wire:confirm="Are you sure you want to edit?"><?php if (isset($component)) { $__componentOriginal6768a8abc6dec1bd6c8b1a9d996e6c97 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6768a8abc6dec1bd6c8b1a9d996e6c97 = $attributes; } ?>
<?php $component = App\View\Components\Link::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Link::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => 'asdf']); ?>s <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6768a8abc6dec1bd6c8b1a9d996e6c97)): ?>
<?php $attributes = $__attributesOriginal6768a8abc6dec1bd6c8b1a9d996e6c97; ?>
<?php unset($__attributesOriginal6768a8abc6dec1bd6c8b1a9d996e6c97); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6768a8abc6dec1bd6c8b1a9d996e6c97)): ?>
<?php $component = $__componentOriginal6768a8abc6dec1bd6c8b1a9d996e6c97; ?>
<?php unset($__componentOriginal6768a8abc6dec1bd6c8b1a9d996e6c97); ?>
<?php endif; ?></button><?php /**PATH D:\RS UMM\inventaris\storage\framework\views/22e62f803cb892a8181f5ccd61d1a56c.blade.php ENDPATH**/ ?>