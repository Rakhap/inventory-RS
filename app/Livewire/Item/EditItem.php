<?php

namespace App\Livewire\Item;

use App\Livewire\Forms\Item\ItemForm;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Inventory;

class EditItem extends Component
{
    public ItemForm $itemForm;
    public $id;
    public Inventory $updateData;

    public function update()
    {
        $this->itemForm->validate();
        $this->updateData->update($this->itemForm->all());
        session()->flash('item-success', 'Berhasil mengupdate');
        $this->itemForm->reset();
        $this->redirectIntended('/inventory', navigate: true);
    }


    #[Title('Edit Item')]
    public function render($id = null)
    {

        $inventory = Inventory::find($this->id);

        if ($inventory) {
            $this->updateData = $inventory;
            $this->itemForm->fill([
                'item_name' => $inventory->item_name,
                'item_brand' => $inventory->item_brand,
                'item_type' => $inventory->item_type,
                'serial_number' => $inventory->serial_number,
                'lokasi' => $inventory->lokasi,
                'tahun_perolehan' => $inventory->tahun_perolehan,
                'masa_kalibrasi' => $inventory->masa_kalibrasi,
                'kondisi_alat' => $inventory->kondisi_alat,
                'daya' => $inventory->daya,
                'stock' => $inventory->stock,
                'item_keterangan' => $inventory->item_keterangan
            ]);
        }else{
            session()->flash('item-error', 'Id barang tidak ditemukan');
            $this->redirectIntended('/inventory', navigate: true);
        }
        return view('livewire.item.edit-item');
    }
}
