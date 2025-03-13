<?php

namespace App\Livewire;

use Livewire\Component;

class TestActions extends Component
{
    public $count = 0;

    public function increment(){
//        dd('this is increment');
//        if we have a parameter in the function we bass it in the balde using this syntx
//        wire:click="increment('-parameter-')" ^_^
        $this->count++;
    }
    public function decrement()
    {
        /**
         * the magic actions we have started with $ in the blade
         *  $refresh - $set(property, value) - $toggle(property) - $emit(event, params)
         * $event
         */
        $this->count--;
    }
    public function render()
    {
        return view('livewire.test-actions');
    }
}
