<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\Inventory;
use Livewire\Component;

class Dashboard extends Component
{
    public bool $showModal = false;
    public $totalItem = 0;
    public function render()
    {
        $customers = Customer::all();
        $this->totalItem = Inventory::all()->count();
        return view('livewire.dashboard')
            ->layout('layouts.app', [
                'title' => 'Dashboard'
            ]);
    }
}
