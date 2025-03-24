<?php

namespace App\Livewire;

use App\Models\Posts;
use Livewire\Component;

class SearchComponent extends Component
{
    public $search;
//    protected $queryString = ['search']; this without options 'when nothing in search it'll be empty in url'
    protected $queryString = [
        'search' => ['except' => '', 'as' => 'find'],
    ];
    public function render()
    {
        return view('livewire.search-component',[
//            'posts' => Posts::all(),
            'posts' => Posts::where('name', 'like', '%' . $this->search . '%')->get(),
        ]);
    }
}
