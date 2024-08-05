<div
    x-show="sidebarMenu"
    :class="sidebarMenu ? 'h-dvh min-w-[280px] bg-dark ml-0 sidebar-menu pl-6 pr-3 py-6 overflow-y-scroll p-0' :
        'h-dvh min-w-[280px] bg-dark -ml-[280px] sidebar-menu pl-6 pr-3 py-6 overflow-y-scroll p-0'">
    <a href="/" wire:navigate class="block font-semibold text-2xl text-white hover:cursor-pointer">
        APP LOGO
        <span class="block text-xs text-gray-400 font-normal">Versi app 4.0</span>
    </a>

    <?php if (isset($component)) { $__componentOriginal34156e8ec7d9d051ed84140b03901f7e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal34156e8ec7d9d051ed84140b03901f7e = $attributes; } ?>
<?php $component = App\View\Components\SidebarItems::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-items'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarItems::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php if (isset($component)) { $__componentOriginalbae6efe1bfead5763c3647be30f4b5b5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbae6efe1bfead5763c3647be30f4b5b5 = $attributes; } ?>
<?php $component = App\View\Components\SidebarItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('dashboard'))]); ?>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('solar-widget-4-linear'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            <span>Dashboard</span>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbae6efe1bfead5763c3647be30f4b5b5)): ?>
<?php $attributes = $__attributesOriginalbae6efe1bfead5763c3647be30f4b5b5; ?>
<?php unset($__attributesOriginalbae6efe1bfead5763c3647be30f4b5b5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbae6efe1bfead5763c3647be30f4b5b5)): ?>
<?php $component = $__componentOriginalbae6efe1bfead5763c3647be30f4b5b5; ?>
<?php unset($__componentOriginalbae6efe1bfead5763c3647be30f4b5b5); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalbae6efe1bfead5763c3647be30f4b5b5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbae6efe1bfead5763c3647be30f4b5b5 = $attributes; } ?>
<?php $component = App\View\Components\SidebarItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/inventory','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('inventory'))]); ?>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('solar-bedside-table-2-linear'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            <span>Inventory</span>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbae6efe1bfead5763c3647be30f4b5b5)): ?>
<?php $attributes = $__attributesOriginalbae6efe1bfead5763c3647be30f4b5b5; ?>
<?php unset($__attributesOriginalbae6efe1bfead5763c3647be30f4b5b5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbae6efe1bfead5763c3647be30f4b5b5)): ?>
<?php $component = $__componentOriginalbae6efe1bfead5763c3647be30f4b5b5; ?>
<?php unset($__componentOriginalbae6efe1bfead5763c3647be30f4b5b5); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginale4ae8947837962af7bd1235a8c392c12 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4ae8947837962af7bd1235a8c392c12 = $attributes; } ?>
<?php $component = App\View\Components\SidebarDropdown::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarDropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('solar-users-group-rounded-linear'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            <span>Dropdown</span>

             <?php $__env->slot('dropdownItems', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginalde55c59f35063d427e6b444cdbe475f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde55c59f35063d427e6b444cdbe475f5 = $attributes; } ?>
<?php $component = App\View\Components\SidebarDropdownItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarDropdownItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/empty']); ?>Sub Menu 1 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalde55c59f35063d427e6b444cdbe475f5)): ?>
<?php $attributes = $__attributesOriginalde55c59f35063d427e6b444cdbe475f5; ?>
<?php unset($__attributesOriginalde55c59f35063d427e6b444cdbe475f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde55c59f35063d427e6b444cdbe475f5)): ?>
<?php $component = $__componentOriginalde55c59f35063d427e6b444cdbe475f5; ?>
<?php unset($__componentOriginalde55c59f35063d427e6b444cdbe475f5); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalde55c59f35063d427e6b444cdbe475f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde55c59f35063d427e6b444cdbe475f5 = $attributes; } ?>
<?php $component = App\View\Components\SidebarDropdownItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarDropdownItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/empty']); ?>Sub Menu 2 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalde55c59f35063d427e6b444cdbe475f5)): ?>
<?php $attributes = $__attributesOriginalde55c59f35063d427e6b444cdbe475f5; ?>
<?php unset($__attributesOriginalde55c59f35063d427e6b444cdbe475f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde55c59f35063d427e6b444cdbe475f5)): ?>
<?php $component = $__componentOriginalde55c59f35063d427e6b444cdbe475f5; ?>
<?php unset($__componentOriginalde55c59f35063d427e6b444cdbe475f5); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalde55c59f35063d427e6b444cdbe475f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde55c59f35063d427e6b444cdbe475f5 = $attributes; } ?>
<?php $component = App\View\Components\SidebarDropdownItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarDropdownItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/empty']); ?>Sub Menu 3 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalde55c59f35063d427e6b444cdbe475f5)): ?>
<?php $attributes = $__attributesOriginalde55c59f35063d427e6b444cdbe475f5; ?>
<?php unset($__attributesOriginalde55c59f35063d427e6b444cdbe475f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde55c59f35063d427e6b444cdbe475f5)): ?>
<?php $component = $__componentOriginalde55c59f35063d427e6b444cdbe475f5; ?>
<?php unset($__componentOriginalde55c59f35063d427e6b444cdbe475f5); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4ae8947837962af7bd1235a8c392c12)): ?>
<?php $attributes = $__attributesOriginale4ae8947837962af7bd1235a8c392c12; ?>
<?php unset($__attributesOriginale4ae8947837962af7bd1235a8c392c12); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4ae8947837962af7bd1235a8c392c12)): ?>
<?php $component = $__componentOriginale4ae8947837962af7bd1235a8c392c12; ?>
<?php unset($__componentOriginale4ae8947837962af7bd1235a8c392c12); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginale4ae8947837962af7bd1235a8c392c12 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale4ae8947837962af7bd1235a8c392c12 = $attributes; } ?>
<?php $component = App\View\Components\SidebarDropdown::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarDropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('solar-archive-linear'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            <span>Dropdown 2</span>

             <?php $__env->slot('dropdownItems', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginalde55c59f35063d427e6b444cdbe475f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde55c59f35063d427e6b444cdbe475f5 = $attributes; } ?>
<?php $component = App\View\Components\SidebarDropdownItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarDropdownItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/empty']); ?>Sub Menu 1 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalde55c59f35063d427e6b444cdbe475f5)): ?>
<?php $attributes = $__attributesOriginalde55c59f35063d427e6b444cdbe475f5; ?>
<?php unset($__attributesOriginalde55c59f35063d427e6b444cdbe475f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde55c59f35063d427e6b444cdbe475f5)): ?>
<?php $component = $__componentOriginalde55c59f35063d427e6b444cdbe475f5; ?>
<?php unset($__componentOriginalde55c59f35063d427e6b444cdbe475f5); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalde55c59f35063d427e6b444cdbe475f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde55c59f35063d427e6b444cdbe475f5 = $attributes; } ?>
<?php $component = App\View\Components\SidebarDropdownItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarDropdownItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/empty']); ?>Sub Menu 2 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalde55c59f35063d427e6b444cdbe475f5)): ?>
<?php $attributes = $__attributesOriginalde55c59f35063d427e6b444cdbe475f5; ?>
<?php unset($__attributesOriginalde55c59f35063d427e6b444cdbe475f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde55c59f35063d427e6b444cdbe475f5)): ?>
<?php $component = $__componentOriginalde55c59f35063d427e6b444cdbe475f5; ?>
<?php unset($__componentOriginalde55c59f35063d427e6b444cdbe475f5); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalde55c59f35063d427e6b444cdbe475f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde55c59f35063d427e6b444cdbe475f5 = $attributes; } ?>
<?php $component = App\View\Components\SidebarDropdownItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarDropdownItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/empty']); ?>Sub Menu 3 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalde55c59f35063d427e6b444cdbe475f5)): ?>
<?php $attributes = $__attributesOriginalde55c59f35063d427e6b444cdbe475f5; ?>
<?php unset($__attributesOriginalde55c59f35063d427e6b444cdbe475f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde55c59f35063d427e6b444cdbe475f5)): ?>
<?php $component = $__componentOriginalde55c59f35063d427e6b444cdbe475f5; ?>
<?php unset($__componentOriginalde55c59f35063d427e6b444cdbe475f5); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale4ae8947837962af7bd1235a8c392c12)): ?>
<?php $attributes = $__attributesOriginale4ae8947837962af7bd1235a8c392c12; ?>
<?php unset($__attributesOriginale4ae8947837962af7bd1235a8c392c12); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale4ae8947837962af7bd1235a8c392c12)): ?>
<?php $component = $__componentOriginale4ae8947837962af7bd1235a8c392c12; ?>
<?php unset($__componentOriginale4ae8947837962af7bd1235a8c392c12); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalbae6efe1bfead5763c3647be30f4b5b5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbae6efe1bfead5763c3647be30f4b5b5 = $attributes; } ?>
<?php $component = App\View\Components\SidebarItem::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sidebar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\SidebarItem::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => '/testing-menu','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('testing'))]); ?>
            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('solar-document-linear'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Svg::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-5 h-5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
            <span>Testing Menu</span>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbae6efe1bfead5763c3647be30f4b5b5)): ?>
<?php $attributes = $__attributesOriginalbae6efe1bfead5763c3647be30f4b5b5; ?>
<?php unset($__attributesOriginalbae6efe1bfead5763c3647be30f4b5b5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbae6efe1bfead5763c3647be30f4b5b5)): ?>
<?php $component = $__componentOriginalbae6efe1bfead5763c3647be30f4b5b5; ?>
<?php unset($__componentOriginalbae6efe1bfead5763c3647be30f4b5b5); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal34156e8ec7d9d051ed84140b03901f7e)): ?>
<?php $attributes = $__attributesOriginal34156e8ec7d9d051ed84140b03901f7e; ?>
<?php unset($__attributesOriginal34156e8ec7d9d051ed84140b03901f7e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal34156e8ec7d9d051ed84140b03901f7e)): ?>
<?php $component = $__componentOriginal34156e8ec7d9d051ed84140b03901f7e; ?>
<?php unset($__componentOriginal34156e8ec7d9d051ed84140b03901f7e); ?>
<?php endif; ?>
</div>
<?php /**PATH D:\RS UMM\inventaris\resources\views/components/sidebar.blade.php ENDPATH**/ ?>