<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e($title ?? 'Page Title'); ?> | <?php echo e(env('APP_NAME')); ?></title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>


</head>
<body class="antialiased">
<div class="w-screen h-dvh flex text-primary-text text-sm leading-relaxed" x-data="{sidebarMenu : true}"
     x-init="sidebarMenu = window.innerWidth < 768 ? false : true"
     x-on:resize.window="sidebarMenu = window.innerWidth > 768;">
    <?php if (isset($component)) { $__componentOriginald31f0a1d6e85408eecaaa9471b609820 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald31f0a1d6e85408eecaaa9471b609820 = $attributes; } ?>
<?php $component = App\View\Components\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Sidebar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald31f0a1d6e85408eecaaa9471b609820)): ?>
<?php $attributes = $__attributesOriginald31f0a1d6e85408eecaaa9471b609820; ?>
<?php unset($__attributesOriginald31f0a1d6e85408eecaaa9471b609820); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald31f0a1d6e85408eecaaa9471b609820)): ?>
<?php $component = $__componentOriginald31f0a1d6e85408eecaaa9471b609820; ?>
<?php unset($__componentOriginald31f0a1d6e85408eecaaa9471b609820); ?>
<?php endif; ?>
    <div class="overflow-x-hidden overflow-y-scroll bg-light w-[100vw] md:w-full mx-auto direction-ltr">
        <?php if (isset($component)) { $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e = $attributes; } ?>
<?php $component = App\View\Components\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Navbar::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title ?? 'Page Title')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $attributes = $__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__attributesOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e)): ?>
<?php $component = $__componentOriginalb9eddf53444261b5c229e9d8b9f1298e; ?>
<?php unset($__componentOriginalb9eddf53444261b5c229e9d8b9f1298e); ?>
<?php endif; ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('alert-offline', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3991362514-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <main class="w-[100vw] md:w-full px-6 py-6">
            <?php echo e($slot); ?>

        </main>
    </div>
    <?php if (isset($component)) { $__componentOriginal49115d54aa597d93edb47e0b269dd843 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49115d54aa597d93edb47e0b269dd843 = $attributes; } ?>
<?php $component = App\View\Components\Toast::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('toast'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Toast::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal49115d54aa597d93edb47e0b269dd843)): ?>
<?php $attributes = $__attributesOriginal49115d54aa597d93edb47e0b269dd843; ?>
<?php unset($__attributesOriginal49115d54aa597d93edb47e0b269dd843); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49115d54aa597d93edb47e0b269dd843)): ?>
<?php $component = $__componentOriginal49115d54aa597d93edb47e0b269dd843; ?>
<?php unset($__componentOriginal49115d54aa597d93edb47e0b269dd843); ?>
<?php endif; ?>
</div>
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html>

<?php /**PATH D:\RS UMM\Inventaris Alkes\inventory-RS\resources\views/layouts/app.blade.php ENDPATH**/ ?>