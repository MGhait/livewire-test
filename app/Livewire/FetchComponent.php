<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class FetchComponent extends Component
{
    public $name;
    public function fetch()
    {
        $data = Http::get('https://api.github.com/users/MGhait');
        $this->name = $data['name'];
    }
    public function render()
    {
        return view('livewire.fetch-component');
    }
}
