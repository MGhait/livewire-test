<?php

namespace App\Livewire;

use App\Models\Posts;
use Livewire\Component;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    use WithPagination;
    public $search;
    protected $paginationTheme = "bootstrap";
//    protected $queryString = ['search']; this without options 'when nothing in search it'll be empty in url'
    protected $queryString = [
        'search' => ['except' => '', 'as' => 'find'],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function paginationView()
    {
        return 'vendor.livewire.custom';
    }
    public function render()
    {
        return view('livewire.search-component',[
//            'posts' => Posts::all(),
            'posts' => Posts::where('name', 'like', '%' . $this->search . '%')->paginate(5),
        ]);
    }
}
