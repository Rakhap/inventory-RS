<div x-on:inventory-created.window="$store.toast.trigger({message : 'Berhasil menambahkan barang'})">
    @if (session('item-success'))
        <div x-init="$store.toast.trigger({message : '{{session('item-success')}}', type: 'success'})"></div>
    @endif

    @if (session('item-error'))
        <div x-init="$store.toast.trigger({message : '{{session('item-error')}}', type: 'error'})"></div>
    @endif

    <x-section>
    <!-- <button wire:click="delete" wire:confirm="Are you sure you want to edit?">Delete</button> -->
        <div class="flex gap-2 flex-wrap">
            <x-link url="/inventory/form">Add Item</x-link>
            <x-button type="button" x-on:click="$wire.showModal = !$wire.showModal">Import</x-button>
        </div>
        <x-dialog id="testingDialog" wire:model.live="showModal">
            <x-slot:dialog-content>
                <form wire:submit="uploadFile" class="space-y-4">
                    <div>
                        <x-label>File Upload</x-label>
                        <x-input type="file" name="excelFile" wire:model.blur="excelFile"/>
                            <x-input-error for="excelFile"/>
                    </div>
                    <div class="flex justify-end items-center gap-4">
                        <x-button type="submit" class="w-max" wire:loading.attr="disabled" wire:target="excelFile">
                            <span wire:loading.class="hidden" wire:target="excelFile">Submit</span>
                            <span wire:loading wire:target="excelFile">Mengunggah file ..</span>
                        </x-button>
                        <x-button variant="btn-outline"
                            x-on:click="$wire.showModal = !$wire.showModal">Cancel</x-button>
                    </div>
                </form>

            </x-slot:dialog-content>

            <x-slot:dialog-action>
            </x-slot:dialog-action>
        </x-dialog>
    </x-section>
    <x-section>
        <livewire:item.table-item />
    </x-section>
</div>