<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FilesComponent extends Component
{
    use WithFileUploads;
    public $photo;

    public function rules()
    {
        return [
            'photo' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
        ];
    }
    public function submit()
    {
        $this->validate();
        $this->photo->storeAs('photos', $this->photo->getClientOriginalName());
    }
    public function render()
    {
        return view('livewire.files-component');
    }
}
