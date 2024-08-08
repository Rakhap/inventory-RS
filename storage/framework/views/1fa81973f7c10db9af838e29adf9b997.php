<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['label' => 'checkbox', 'id']));

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

foreach (array_filter((['label' => 'checkbox', 'id']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="flex items-center gap-1 w-max">
    <input
        type="checkbox"
        id="<?php echo e($id); ?>"
        <?php echo $attributes->merge([
            'class' => 'peer cursor-pointer appearance-none relative h-4 w-4 border-gray-300 border checked:border-primary checked:bg-primary rounded focus:outline-primary focus:accent-primary active:accent-primary'
        ]); ?>

    >
    <label for="<?php echo e($id); ?>"
           class="hover:cursor-pointer ms-1 text-sm text-secondary-text">
        <?php echo e($label); ?>

    </label>
</div>
<?php /**PATH /Users/achmadrifqi/Documents/Development/Laravel/RSUMM/inventory-RS/resources/views/components/checkbox.blade.php ENDPATH**/ ?>