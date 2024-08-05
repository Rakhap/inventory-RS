<?php use \PowerComponents\LivewirePowerGrid\Components\Rules\RuleManager; ?>
<?php
    $rulesValues = $actionRulesClass->recoverFromAction($row, RuleManager::TYPE_CHECKBOX);

    $inputAttributes = new \Illuminate\View\ComponentAttributeBag([
        'class' => data_get($theme, 'checkbox.inputClass'),
    ]);

    if (filled($rulesValues['setAttributes'])) {
        foreach ($rulesValues['setAttributes'] as $rulesAttributes) {
            $inputAttributes = $inputAttributes->merge([
                $rulesAttributes['attribute'] => $rulesAttributes['value'],
            ]);
        }
    }
?>

<!--[if BLOCK]><![endif]--><?php if(filled($rulesValues['hide'])): ?>
    <td
        class="<?php echo e(data_get($theme, 'checkbox.thClass')); ?>"
        style="<?php echo e(data_get($theme, 'checkbox.thStyle')); ?>"
    >
    </td>
<?php elseif(filled($rulesValues['disable'])): ?>
    <td
        class="<?php echo e(data_get($theme, 'checkbox.tdClass')); ?>"
        style="<?php echo e(data_get($theme, 'checkbox.tdStyle')); ?>"
    >
        <div class="<?php echo e(data_get($theme, 'checkbox.divClass')); ?>">
            <label class="<?php echo e(data_get($theme, 'checkbox.labelClass')); ?>">
                <input
                    <?php echo e($inputAttributes); ?>

                    disabled
                    type="checkbox"
                >
            </label>
        </div>
    </td>
<?php else: ?>
    <td
        class="<?php echo e(data_get($theme, 'checkbox.thClass')); ?>"
        style="<?php echo e(data_get($theme, 'checkbox.thStyle')); ?>"
    >
        <div class="<?php echo e(data_get($theme, 'checkbox.divClass')); ?>">
            <label class="<?php echo e(data_get($theme, 'checkbox.labelClass')); ?>">
                <input
                    x-data="{}"
                    type="checkbox"
                    <?php echo e($inputAttributes); ?>

                    x-on:click="window.Alpine.store('pgBulkActions').add($event.target.value, '<?php echo e($tableName); ?>')"
                    wire:model="checkboxValues"
                    value="<?php echo e($attribute); ?>"
                >
            </label>
        </div>
    </td>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH /Users/achmadrifqi/Documents/Development/Laravel/test/inventory-RS-/vendor/power-components/livewire-powergrid/src/Providers/../../resources/views/components/checkbox-row.blade.php ENDPATH**/ ?>