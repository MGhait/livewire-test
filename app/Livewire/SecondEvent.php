<?php

namespace App\Livewire;

use Livewire\Component;

class SecondEvent extends Component
{

    protected $listeners = [
        'fire' => 'ambulance'
    ];

    public function ambulance(){
        dd('I am ambulance listener from second event');
    }
    public function render()
    {
        return view('livewire.second-event');
    }
}
