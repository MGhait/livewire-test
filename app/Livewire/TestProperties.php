<?php

namespace App\Livewire;

use Livewire\Component;

class TestProperties extends Component
{
//    public  $name;
    public string $data = 'Mohamed';
//    public $name1 ;
//    public $name2 ;
//    public $name3 ;
//    public function mount()
//    {
//        $this->name = 'Mohamed Gheit';
//        $this->fill([
//            'name1' => 'Mohamed',
//            'name2' => 'Saad',
//            'name3' => 'Gheit',
//        ]);

//        $this->reset('name');
//        $this->reset(['name', 'name3']);
//        $this->resetExcept(['name']);
//    }
    public function render()
    {
        return view('livewire.test-properties');
    }
}
