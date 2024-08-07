<?php

namespace App\Livewire\Room;

use Livewire\Component;
use App\Models\Room;



class CreateRoom extends Component
{
    public $showModal = false;
    public $room_name;
    public function render()
    {
        return view('livewire.room.room')->layout('layouts.app', [
            'title' => 'Ruangan'
        ]);;
    }
    public function save(){
        Room::create([
            'room_name' => $this->room_name
        ]);

        $this->showModal=false;
        $this->dispatch('pg:eventRefreshs-table-room ');
    }
}
