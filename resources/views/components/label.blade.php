@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm mb-1 text-secondary-text']) }}>
    {{ $value ?? $slot }}
</label>
