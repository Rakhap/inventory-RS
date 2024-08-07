<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['width'])
<x-livewire-powergrid::icons.chevron-down :width="$width" >

{{ $slot ?? "" }}
</x-livewire-powergrid::icons.chevron-down>