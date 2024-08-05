<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['variant' => 'btn-default', 'size' => 'btn-base']));

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

foreach (array_filter((['variant' => 'btn-default', 'size' => 'btn-base']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>




<button
    <?php echo e($attributes->merge(
        [
            'disabled' => false,
            'type' => 'submit',
            'class' => "flex justify-center items-center font-medium rounded-lg disabled:opacity-70 $variant $size"
        ])); ?>>

    <?php echo e($slot); ?>

</button>
<?php /**PATH /Users/achmadrifqi/Documents/Development/Laravel/test/inventory-RS-/resources/views/components/button.blade.php ENDPATH**/ ?>