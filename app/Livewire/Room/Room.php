<?php

namespace App\Livewire\Room;

use Livewire\Component;
use App\Models\Room as RoomModel;

class Room extends Component
{
    public $showModal = false;
    public $room_name = "";
    public function render()
    {
        return view('livewire.room.room')->layout('layouts.app', [
            'title' => 'Ruangan'
        ]);
    }
    public function save(){
        RoomModel::create([
            'room_name' => $this->room_name
        ]);

        $this->showModal = false;
        $this->dispatch('pg:eventRefresh-TableRoom ')->to(TableRoom::class);
    }
}
