<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['url', 'variant' => 'btn-default', 'size' => 'btn-base']));

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

foreach (array_filter((['url', 'variant' => 'btn-default', 'size' => 'btn-base']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<a
    <?php echo e($attributes->merge(
        [
            'disabled' => false,
            'class' => "flex justify-center items-center font-medium rounded-lg disabled:opacity-70 block w-max $variant $size"
        ])); ?> href="<?php echo e($url); ?>" wire:navigate>

    <?php echo e($slot); ?>

</a>
<?php /**PATH /Users/achmadrifqi/Documents/Development/Laravel/RSUMM/inventory-RS/resources/views/components/link.blade.php ENDPATH**/ ?>