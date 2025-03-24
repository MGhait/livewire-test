<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FilesComponent extends Component
{
    use WithFileUploads;
//    public $photo;
    public $photos = [];
    public function rules()
    {
        return [
//            'photo' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'photos.*' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
        ];
    }
    public function submit()
    {
        $this->validate();
        foreach ($this->photos as $photo) {
            $photo->storeAs('photos', $photo->getClientOriginalName());
        }
//        $this->photo->storeAs('photos', $this->photo->getClientOriginalName());
    }
    public function render()
    {
        return view('livewire.files-component');
    }
}
