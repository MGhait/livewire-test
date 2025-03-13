<?php

namespace App\Livewire;

use Livewire\Component;

class TryHooks extends Component
{
    public $count = 0;
    public function mount()
    {
        dump('mount function');
    }
    public function boot()
    {
        dump('boot function');
    }
    public function increment()
    {
        $this->count++;
        dump('increment done through the function increment()');
    }
    public function render()
    {
        dump('render function');
        return view('livewire.try-hooks');
    }
}
