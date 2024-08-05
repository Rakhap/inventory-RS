@props(['url'])

<li>
    <a wire:navigate href="{{$url}}"
       class="flex box-border font-medium whitespace-nowrap gap-4 text-gray-400 items-center hover:text-light py-2 ml-4 rounded-lg">
        {{$slot}}
    </a>
</li>
