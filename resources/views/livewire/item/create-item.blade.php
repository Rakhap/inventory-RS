<x-section>
    <div>
        <x-label>Setiap terdapat simbol asterik * wajib diisi</x-label>
        <form wire:submit="saveItem" class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="w-full">
                    <x-label>Nama Barang*</x-label>
                    <x-input name="item_name" type="text" wire:model.blur="itemForm.item_name" />
                    <x-input-error for="itemForm.item_name" />
                </div>

                <div class="w-full">
                    <x-label>Merk Barang*</x-label>
                    <x-input name="item_brand" type="text" wire:model.blur="itemForm.item_brand" />
                    <x-input-error for="itemForm.item_brand" />
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="w-full">
                    <x-label>Type Barang*</x-label>
                    <x-input name="item_type" type="text" wire:model.blur="itemForm.item_type" />
                    <x-input-error for="itemForm.item_type" />
                </div>

                <div class="w-full">
                    <x-label>Serial Number*</x-label>
                    <x-input name="serial_number" type="text" wire:model.blur="itemForm.serial_number" />
                    <x-input-error for="itemForm.serial_number" />
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="w-full">
                    <x-label>Lokasi*</x-label>
                    <x-input name="lokasi" type="text" wire:model.blur="itemForm.lokasi" />
                    <x-input-error for="itemForm.lokasi" />
                </div>

                <div class="w-full">
                    <x-label>Tahun Perolehan*</x-label>
                    <x-input name="tahun_perolehan" type="date" wire:model.blur="itemForm.tahun_perolehan" />
                    <x-input-error for="itemForm.tahun_perolehan" />
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="w-full">
                    <x-label>Masa Habis Kalibrasi*</x-label>
                    <x-input name="masa_kalibrasi" type="date" wire:model.blur="itemForm.masa_kalibrasi" />
                    <x-input-error for="itemForm.masa_kalibrasi" />
                </div>


                <div class="w-full">
                    <x-label>Kondisi Alat*</x-label>
                    <x-input name="kondisi_alat" type="text" wire:model.blur="itemForm.kondisi_alat" />
                    <x-input-error for="itemForm.kondisi_alat" />
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="w-full">
                    <x-label>Daya*</x-label>
                    <x-input name="daya" type="number" wire:model.blur="itemForm.daya" />
                    <x-input-error for="itemForm.daya" />
                </div>

                <div class="w-full">
                    <x-label>stock barang*</x-label>
                    <x-input name="stock" type="number" wire:model.blur="itemForm.stock" />
                    <x-input-error for="itemForm.stock" />
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="w-full">
                    <x-label>Keterangan*</x-label>
                    <x-input name="item_keterangan" type="text" wire:model.blur="itemForm.item_keterangan" />
                    <x-input-error for="itemForm.item_keterangan" />
                </div>
                <div class="w-full">
                    <x-label>Ruangan*</x-label>
                    <x-select-input wire:model.blur="itemForm.room_id">
                        <x-slot:options>
                            <x-option value="null" selected>-</x-option>
                            @foreach($rooms as $room)
                                <x-option value="{{$room->id}}" wire:key="{{$room->id}}">{{$room->room_name}}</x-option>
                            @endforeach
                        </x-slot:options>
                    </x-select-input>
                    <x-input-error for="itemForm.room_id" />
                </div>
            </div>
            <div class="flex flex-wrap justify-end gap-4">
                <x-button type="submit" class="w-max" wire:loading.attr="disabled" wire:target="saveItem">
                    <span wire:loading.class="hidden" wire:target="saveItem">Submit</span>
                    <span wire:loading wire:target="saveItem">Loading ..</span>
                </x-button>
                <x-link variant="btn-outline" url="/inventory">Batal</x-link>
            </div>
        </form>
    </div>
</x-section>
