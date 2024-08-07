<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['rows' => 4]));

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

foreach (array_filter((['rows' => 4]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="relative overflow-x-auto overflow-y-auto border-gray-200 rounded-md">
    <table class="w-full text-sm text-left rtl:text-right text-primary-text">
        <thead class="text-xs text-gray-700 uppercase bg-secondary/10 dark:bg-gray-700">
        <tr>
            <!--[if BLOCK]><![endif]--><?php for($i = 1; $i <= $rows; $i++): ?>
                <th scope="col" class="px-6 py-3">
                    <div class="mx-auto w-8 h-2 md:w-1/2 md:h-2.5 min-w-8 rounded bg-gray-300 animate-pulse"></div>
                </th>
            <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
        </tr>
        </thead>
        <tbody>
        <!--[if BLOCK]><![endif]--><?php for($i = 1; $i <= 4; $i++): ?>
            <tr class="bg-white border-b odd:bg-white even:bg-gray-50">
                <!--[if BLOCK]><![endif]--><?php for($y = 1; $y <= $rows; $y++): ?>
                    <td class="px-6 py-4">
                        <div class="mx-auto w-8 h-2 md:w-1/2 md:h-2.5 min-w-8 rounded bg-gray-300 animate-pulse"></div>
                    </td>
                <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
            </tr>
        <?php endfor; ?><!--[if ENDBLOCK]><![endif]-->
        </tbody>
    </table>
</div>


<?php /**PATH D:\RS UMM\Inventaris Alkes\inventory-RS\resources\views/components/table-skeleton.blade.php ENDPATH**/ ?>