<?php

namespace App\Livewire\Item;

use App\Imports\InventoryImport;
use Livewire\Component;
use Livewire\WithFileUploads;

use Livewire\Attributes\Validate;
use Maatwebsite\Excel\Facades\Excel;

class Item extends Component
{
    use WithFileUploads;

    public $showModal = false;

    #[Validate('file|required|mimes:csv,xls,xlsx')]
    public $excelFile = null;
    public function render()
    {
        return view('livewire.item.item')->layout('layouts.app', [
            'title' => 'Inventory'
        ]);
    }

    public function uploadFile()
    {
        Excel::import(new InventoryImport, $this->excelFile);
        $this->showModal = false;
        $this->dispatch('pg:eventRefresh-TableItem');
    }

}
