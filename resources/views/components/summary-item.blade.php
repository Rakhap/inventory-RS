@props(['icon', 'value', 'description'])

<div
    class="p-4 border border-gray-100 rounded-xl shadow-sm flex items-start bg-white gap-4 w-full">
    <div class="rounded-full p-2 bg-primary/40 w-max h-max">
        <div class="text-white bg-primary p-3 rounded-full w-max">
            {{ $icon }}
        </div>
    </div>
    <div>

        <h3 class="text-2xl font-bold">{{$value ?? 0}}</h3>
        <p class="text-secondary-text">{{$description ?? "Description"}}</p>
    </div>
</div>
