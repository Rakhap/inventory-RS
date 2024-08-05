@props(['url', 'variant' => 'btn-default', 'size' => 'btn-base'])

<a
    {{ $attributes->merge(
        [
            'disabled' => false,
            'class' => "flex justify-center items-center font-medium rounded-lg disabled:opacity-70 block w-max $variant $size"
        ])
    }} href="{{$url}}" wire:navigate>

    {{ $slot }}
</a>
