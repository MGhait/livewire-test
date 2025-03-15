<?php

namespace App\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $parentTitle = "I'm the parent title";
    public $childrenNames = ['Abdelrahman', 'Rody', 'mohamed'];
    public function render()
    {
        return view('livewire.parent-component');
    }
}
