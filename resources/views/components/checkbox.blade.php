@props(['label' => 'checkbox', 'id'])

<div class="flex items-center gap-1 w-max">
    <input
        type="checkbox"
        id="{{$id}}"
        {!! $attributes->merge([
            'class' => 'peer cursor-pointer appearance-none relative h-4 w-4 border-gray-300 border checked:border-primary checked:bg-primary rounded focus:outline-primary focus:accent-primary active:accent-primary'
        ])!!}
    >
    <label for="{{$id}}"
           class="hover:cursor-pointer ms-1 text-sm text-secondary-text">
        {{$label}}
    </label>
</div>
