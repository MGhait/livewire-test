<?php

namespace App\Livewire;

use App\Models\Posts;
use Livewire\Component;

class SearchComponent extends Component
{
    public $search;
    public function render()
    {
        return view('livewire.search-component',[
//            'posts' => Posts::all(),
            'posts' => Posts::where('name', 'like', '%' . $this->search . '%')->get(),
        ]);
    }
}
