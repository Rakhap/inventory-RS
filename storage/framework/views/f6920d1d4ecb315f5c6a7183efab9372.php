<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['id', 'title', 'dialogContent', 'dialogAction']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['id', 'title', 'dialogContent', 'dialogAction']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<dialog
    x-data="{ show: <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?> }"
    id="<?php echo e($id); ?>"
    x-bind:open="show"
>
    <div class="fixed inset-0 z-50 w-screen h-dvh bg-transparent flex justify-center">
        <div class="fixed inset-0 bg-black z-40 bg-opacity-65"></div>

        <div class="fixed z-50 mt-20 min-w-[20em] w-full md:w-1/2 lg:w-1/3 p-6">
            <div class="bg-white p-6 shadow-lg rounded-lg ">
                <div class="mb-6 flex justify-between items-center">
                    <h5 class="text-lg font-medium"><?php echo e($title ?? "Dialog Title"); ?></h5>
                    <button class="bg-secondary/10 rounded-lg w-6 h-6"
                            x-on:click="show=!show">
                        x
                    </button>
                </div>

                <div>
                    <?php echo e($dialogContent); ?>

                </div>

                <div class="flex justify-end items-center mt-4 gap-2">
                    <!--[if BLOCK]><![endif]--><?php if(isset($dialogAction)): ?>
                        <?php echo e($dialogAction); ?>

                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </div>

</dialog>
<?php /**PATH D:\RS UMM\Inventaris Alkes\inventory-RS\resources\views/components/dialog.blade.php ENDPATH**/ ?>