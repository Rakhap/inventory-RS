<div class="flex flex-wrap w-full gap-6">
    <div class="w-full">
        <x-section>
            <div class="grid grid-cols-1 md:grid-cols-2 ">
                <div class="flex gap-2 flex-wrap ">
                <x-button type="button" x-on:click="$wire.showModal = !$wire.showModal">Tambah
                        Ruangan</x-button>
                </div>
            </div>
            <x-dialog id="createRoomDialog" wire:model.live="showModal">
                <x-slot:dialog-content>
                    <form wire:submit="save" class="space-y-4">
                        <div>
                            <x-label>Nama Ruangan</x-label>
                            <x-input type="text" name="room_name" wire:model.blur="room_name" />
                            <x-input-error for="room_name" />
                        </div>
                        <div class="flex justify-end items-center gap-4">
                        <x-button type="submit" class="w-max" wire:loading.attr="disabled">
                            <span wire:target="save">Submit</span>
                        </x-button>
                        <x-button variant="btn-outline"
                            x-on:click="$wire.showModal = !$wire.showModal">Cancel</x-button>
                        </div>
                    </form>
                </x-slot:dialog-content>
            </x-dialog>
        </x-section>
    </div>

    <div class="w-full">
        <x-section>
            <livewire:room.table-room />
        </x-section>
    </div>
</div>
