@props(['variant' => 'btn-default', 'size' => 'btn-base'])

{{-- variant : btn-default btn-outline, btn-danger--}}
{{--size : btn-sm, btn-base, btn-lg --}}

<button
    {{ $attributes->merge(
        [
            'disabled' => false,
            'type' => 'submit',
            'class' => "flex justify-center items-center font-medium rounded-lg disabled:opacity-70 $variant $size"
        ])
    }}>

    {{ $slot }}
</button>
