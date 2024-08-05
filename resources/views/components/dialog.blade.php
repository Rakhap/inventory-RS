@props(['id', 'title', 'dialogContent', 'dialogAction'])

<dialog
    x-data="{ show: @entangle($attributes->wire('model')) }"
    id="{{ $id }}"
    x-bind:open="show"
>
    <div class="fixed inset-0 z-50 w-screen h-dvh bg-transparent flex justify-center">
        <div class="fixed inset-0 bg-black z-40 bg-opacity-65"></div>

        <div class="fixed z-50 mt-20 min-w-[20em] w-full md:w-1/2 lg:w-1/3 p-6">
            <div class="bg-white p-6 shadow-lg rounded-lg ">
                <div class="mb-6 flex justify-between items-center">
                    <h5 class="text-lg font-medium">{{ $title ?? "Dialog Title" }}</h5>
                    <button class="bg-secondary/10 rounded-lg w-6 h-6"
                            x-on:click="show=!show">
                        x
                    </button>
                </div>

                <div>
                    {{ $dialogContent }}
                </div>

                <div class="flex justify-end items-center mt-4 gap-2">
                    @if(isset($dialogAction))
                        {{$dialogAction}}
                    @endif
                </div>
            </div>
        </div>
    </div>

</dialog>
