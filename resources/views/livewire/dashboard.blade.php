<div class="space-y-6">
    <x-summary>
        <x-summary-item>
            <x-slot:icon>
                <x-solar-users-group-rounded-linear class="w-6 h-6"/>
            </x-slot:icon>
            <x-slot:value>{{$totalItem}}</x-slot:value>
            <x-slot:description>Jumlah barang di RS</x-slot:description>
        </x-summary-item>
        <x-summary-item>
            <x-slot:icon>
                <x-solar-bed-linear class="w-6 h-6"/>
            </x-slot:icon>
            <x-slot:value>78</x-slot:value>
            <x-slot:description>Kamar terpakai</x-slot:description>
        </x-summary-item>
    </x-summary>

    <x-section>
        <div class="flex gap-2">
            <x-button x-on:click="$store.toast.trigger({message : 'Berhasil malakukan aksi'})">
                Toast Success
            </x-button>
            <x-button
                x-on:click="$store.toast.trigger({message : 'Gagal melakukan aksi', type : 'error'})">
                Toast Error
            </x-button>
            <x-button variant="btn-outline" x-on:click="$wire.showModal = !$wire.showModal">Dialog</x-button>
        </div>
    </x-section>

    <x-section>
        <livewire:customer-table/>
    </x-section>

    <x-dialog id="testingDialog" wire:model.live="showModal">
        <x-slot:dialog-content>
            <h5 class="text-md font-medium">Dialog Content</h5>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>

        </x-slot:dialog-content>

        <x-slot:dialog-action>
            <x-button variant="btn-outline" x-on:click="$wire.showModal = !$wire.showModal">Cancel</x-button>
            <x-button>Confirm</x-button>
        </x-slot:dialog-action>
    </x-dialog>
</div>

