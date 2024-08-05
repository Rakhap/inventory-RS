<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['url', 'active' => false]));

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

foreach (array_filter((['url', 'active' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<li>
    <a wire:navigate
       href="<?php echo e($url); ?>"
       class="<?php echo e($active ? 'sidebar-active' : ''); ?>

        flex gap-4 font-medium whitespace-nowrap text-left items-center text-gray-400 py-2 rounded-lg px-3 hover:bg-active/50 w-full hover:text-light hover:cursor-pointer">
        <?php echo e($slot); ?>

    </a>
</li>
<?php /**PATH /Users/achmadrifqi/Documents/Development/Laravel/test/inventory-RS-/resources/views/components/sidebar-item.blade.php ENDPATH**/ ?>