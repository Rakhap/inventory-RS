@props(['url', 'active' => false])

<li>
    <a wire:navigate
       href="{{$url}}"
       class="{{$active ? 'sidebar-active' : ''}}
        flex gap-4 font-medium whitespace-nowrap text-left items-center text-gray-400 py-2 rounded-lg px-3 hover:bg-active/50 w-full hover:text-light hover:cursor-pointer">
        {{ $slot }}
    </a>
</li>
