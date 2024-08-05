@props(['disabled' => false])

<input
    {{
        $disabled ? 'disabled' : ''
    }}
    {!! $attributes->merge([
        'class' => 'border px-3 py-2 border-gray-300 w-full focus:outline-none focus:ring-primary focus:border-primary rounded-lg '
    ])
!!}>
