<?php

namespace App\Livewire;

use Livewire\Component;

class FullComp extends Component
{
    public function render()
    {
        return view('livewire.full-comp')->layout('components.default',['title' => 'Mohamed Gheit']);
//        return view('livewire.full-comp')->layout('components.default')->slot('slot');
//        return view('livewire.full-comp')->extends('components.default'); // if used @yeild()
    }
}
