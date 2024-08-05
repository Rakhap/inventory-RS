<div
    x-show="sidebarMenu"
    :class="sidebarMenu ? 'h-dvh min-w-[280px] bg-dark ml-0 sidebar-menu pl-6 pr-3 py-6 overflow-y-scroll p-0' :
        'h-dvh min-w-[280px] bg-dark -ml-[280px] sidebar-menu pl-6 pr-3 py-6 overflow-y-scroll p-0'">
    <a href="/" wire:navigate class="block font-semibold text-2xl text-white hover:cursor-pointer">
        APP LOGO
        <span class="block text-xs text-gray-400 font-normal">Versi app 4.0</span>
    </a>

    <x-sidebar-items>
        <x-sidebar-item url="/" :active="request()->routeIs('dashboard')">
            <x-solar-widget-4-linear class="w-5 h-5"/>
            <span>Dashboard</span>
        </x-sidebar-item>

        <x-sidebar-item url="/inventory" :active="request()->routeIs('inventory')">
            <x-solar-bedside-table-2-linear class="w-5 h-5"/>
            <span>Inventory</span>
        </x-sidebar-item>

        <x-sidebar-dropdown>
            <x-solar-users-group-rounded-linear class="w-5 h-5"/>
            <span>Dropdown</span>

            <x-slot:dropdown-items>
                <x-sidebar-dropdown-item url="/empty">Sub Menu 1</x-sidebar-dropdown-item>
                <x-sidebar-dropdown-item url="/empty">Sub Menu 2</x-sidebar-dropdown-item>
                <x-sidebar-dropdown-item url="/empty">Sub Menu 3</x-sidebar-dropdown-item>
            </x-slot:dropdown-items>
        </x-sidebar-dropdown>

        <x-sidebar-dropdown>
            <x-solar-archive-linear class="w-5 h-5"/>
            <span>Dropdown 2</span>

            <x-slot:dropdown-items>
                <x-sidebar-dropdown-item url="/empty">Sub Menu 1</x-sidebar-dropdown-item>
                <x-sidebar-dropdown-item url="/empty">Sub Menu 2</x-sidebar-dropdown-item>
                <x-sidebar-dropdown-item url="/empty">Sub Menu 3</x-sidebar-dropdown-item>
            </x-slot:dropdown-items>
        </x-sidebar-dropdown>

        <x-sidebar-item url="/testing-menu" :active="request()->routeIs('testing')">
            <x-solar-document-linear class="w-5 h-5"/>
            <span>Testing Menu</span>
        </x-sidebar-item>
    </x-sidebar-items>
</div>
