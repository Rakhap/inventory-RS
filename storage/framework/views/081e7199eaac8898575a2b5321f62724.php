<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo e($title ?? 'Page Title'); ?> | <?php echo e(env('APP_NAME')); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>
<body class="antialiased">

<main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 min-h-dvh w-screen text-primary-text lg:gap-32 xl:gap-40">
    <div class="hidden md:block overflow-hidden relative resize-none bg-primary">
        <div
            class="bg-[url('../images/patterns.svg')] bg-no-repeat bg-contain bg-bottom bg-opacity-0 w-full h-full px-6">
            <div class="pt-32 space-y-2">
                <h1 class="leading-10 text-3xl lg:text-4xl font-bold text-white">Lorem ipsum Dolor<br/>Sit
                    amet <br/>Consectetur
                </h1>
                <p class="text-light leading-relaxed">Lorem ipsum dolor sit.</p>
            </div>
            <span class="block mt-4 w-1/2 h-1 bg-secondary"></span>
            <div class="absolute bottom-16">
                <p class="text-white">© Copyright 2024 | All Rights Reserved</p>
            </div>
        </div>
    </div>
    <div class="col-span-1 lg:col-span-2">
        <?php echo e($slot); ?>

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
</main>
<?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html>
<?php /**PATH /Users/achmadrifqi/Documents/Development/Laravel/test/inventory-RS-/resources/views/layouts/auth.blade.php ENDPATH**/ ?>