@props(['value', 'disabled' => false, 'defaultValue' => null])

<option
    value="{{$value}}"
    {{
        $disabled ? 'disabled' : ''
    }}

    {{
        $attributes
    }}
    @selected($value == $defaultValue)
>
    {{$slot}}
</option>
