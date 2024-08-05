<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class Dashboard extends Component
{
    public bool $showModal = false;
    
    public function render()
    {
        $customers = Customer::all();

        return view('livewire.dashboard')
            ->layout('layouts.app', [
                'title' => 'Dashboard'
            ]);
    }
}
