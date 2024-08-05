<?php
    $actionController = new \PowerComponents\LivewirePowerGrid\Components\Actions\ActionsController($this, collect());
    $headers = $this->header();
    $actions = $actionController->execute($headers);
?>
<div>
    <!--[if BLOCK]><![endif]--><?php if(filled($actions)): ?>
        <div class="w-full md:w-auto">
            <div class="flex flex-wrap gap-2 mr-2">
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="w-full min-[370px]:!w-[calc(50%-4px)] sm:!w-[calc(33%-4px)] md:!w-auto">
                        <?php echo $action; ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>
<?php /**PATH D:\RS UMM\inventaris\vendor\power-components\livewire-powergrid\src\Providers/../../resources/views/components/frameworks/tailwind/header/actions.blade.php ENDPATH**/ ?>