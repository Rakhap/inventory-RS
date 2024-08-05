<x-section>
    <div x-on:inventory-edited="$store.toast.trigger({message : 'Berhasil menambahkan barang'})">
        <div class="flex gap-2 flex-wrap">
            <x-button>FORM EDIT</x-button>
        </div>
        <div>
            <form wire:submit.prevent="update" class="space-y-4">
                <div class="w-full">
                    <x-label>Setiap terdapat simbol asterik * wajib diisi</x-label>
                    <x-label>Nama Barang*</x-label>
                    <x-input name="item_name" type="text" wire:model.defer="itemForm.item_name" />
                    <x-input-error for="itemForm.item_name" />
                </div>

                <div class="w-full">
                    <x-label>Merk Barang*</x-label>
                    <x-input name="item_brand" type="text" wire:model.defer="itemForm.item_brand" />
                    <x-input-error for="itemForm.item_brand" />
                </div>

                <div class="w-full">
                    <x-label>Type Barang*</x-label>
                    <x-input name="item_type" type="text" wire:model.defer="itemForm.item_type" />
                    <x-input-error for="itemForm.item_type" />
                </div>

                <div class="w-full">
                    <x-label>Serial Number*</x-label>
                    <x-input name="serial_number" type="text" wire:model.defer="itemForm.serial_number" />
                    <x-input-error for="itemForm.serial_number" />
                </div>

                <div class="w-full">
                    <x-label>Lokasi*</x-label>
                    <x-input name="lokasi" type="text" wire:model.defer="itemForm.lokasi" />
                    <x-input-error for="itemForm.lokasi" />
                </div>

                <div class="w-full">
                    <x-label>Tahun Perolehan*</x-label>
                    <x-input name="tahun_perolehan" type="date" wire:model.defer="itemForm.tahun_perolehan" />
                    <x-input-error for="itemForm.tahun_perolehan" />
                </div>

                <div class="w-full">
                    <x-label>Masa Habis Kalibrasi*</x-label>
                    <x-input name="masa_kalibrasi" type="date" wire:model.defer="itemForm.masa_kalibrasi" />
                    <x-input-error for="itemForm.masa_kalibrasi" />
                </div>

                <div class="w-full">
                    <x-label>Kondisi Alat*</x-label>
                    <x-input name="kondisi_alat" type="text" wire:model.defer="itemForm.kondisi_alat" />
                    <x-input-error for="itemForm.kondisi_alat" />
                </div>

                <div class="w-full">
                    <x-label>Daya*</x-label>
                    <x-input name="daya" type="text" wire:model.defer="itemForm.daya" placeholder="Volt" />
                    <x-input-error for="itemForm.daya" />
                </div>

                <div class="w-full">
                    <x-label>Keterangan*</x-label>
                    <x-input name="item_keterangan" type="text" wire:model.defer="itemForm.item_keterangan" />
                    <x-input-error for="itemForm.item_keterangan" />
                </div>

                <x-button>
                    Update
                </x-button>
                <x-link variant="btn-outline" url="/inventory">Cancel</x-link>
            </form>
        </div>
    </div>
</x-section>