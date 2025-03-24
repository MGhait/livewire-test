<?php

namespace App\Livewire;

use Livewire\Component;

class FlashComponent extends Component
{
    public function flash()
    {
        session()->flash('message', 'I am flash message from button');
        return redirect()->route('welcome2');
    }
    public function render()
    {
        return view('livewire.flash-component');
    }
}
