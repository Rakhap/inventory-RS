<?php

namespace App\Livewire\Item;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Inventory;
use App\Livewire\Forms\Item\ItemForm;

class CreateItem extends Component
{
    public ItemForm $itemForm;
    #[Title('Tambah Item')]
    public function render()
    {

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
            'item_keterangan'=>$this->itemForm->item_keterangan,
        ]);


        $this->dispatch('inventory-created')->to(Item::class);
        $this->redirectIntended('/inventory', navigate:true);
    }

    public function refreshtable()
    {
        $this->dispatch('pg:eventRefreshs-TableItem');
    }

}
