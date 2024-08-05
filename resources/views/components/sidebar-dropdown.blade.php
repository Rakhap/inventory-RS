@props(['dropdownItems'])

<li x-data="{showDropdownItems : false}">
    <button
        x-on:click="showDropdownItems = !showDropdownItems"
        class="flex gap-4 items-center justify-between text-gray-400 py-2 rounded-lg px-3 hover:text-light hover:bg-active/50 w-full focus:bg-active/50">
                <span class="flex gap-4 items-center font-medium">
                    {{ $slot }}
                </span>
        <x-solar-alt-arrow-down-line-duotone class="w-5 h-5" x-show="!showDropdownItems"/>
        <x-solar-alt-arrow-up-line-duotone class="w-5 h-5" x-show="showDropdownItems"/>
    </button>

    <ul class="ml-8" x-show="showDropdownItems">
        {{$dropdownItems}}
    </ul>
</li>
