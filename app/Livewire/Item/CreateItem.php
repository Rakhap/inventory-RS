<?php

namespace App\Livewire\Item;

use App\Models\Room;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Inventory;
use App\Livewire\Forms\Item\ItemForm;

class CreateItem extends Component
{
    public ItemForm $itemForm;

    public object $rooms;
    #[Title('Tambah Item')]
    public function render()
    {
        $this->rooms = Room::all();
        return view('livewire.item.create-item');

    }
    public function saveItem(){
        $this->itemForm->validate();
        Inventory::create([
            'item_name' => $this->itemForm->item_name,
            'item_brand' => $this->itemForm->item_brand,
            'item_type' => $this->itemForm->item_type,
            'serial_number' => $this->itemForm->serial_number,
            'lokasi'=> $this->itemForm->lokasi,
            'tahun_perolehan'=> $this->itemForm->tahun_perolehan,
            'masa_kalibrasi'=> $this->itemForm->masa_kalibrasi,
            'kondisi_alat'=>$this->itemForm->kondisi_alat,
            'daya' => $this->itemForm->daya,
            'stock'=> $this->itemForm->stock,
            'item_keterangan'=>$this->itemForm->item_keterangan,
            'room_id' => (int) $this->itemForm->room_id
        ]);

        $this->dispatch('inventory-created')->to(Item::class);
        $this->redirect('/inventory', navigate:true);
    }

    public function refreshtable()
    {
        $this->dispatch('pg:eventRefreshs-TableItem');
    }

}
