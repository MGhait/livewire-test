<?php

namespace App\Livewire;

use Livewire\Component;
use function Symfony\Component\Translation\t;

class ValidationComponent extends Component
{
    #[Validate]
    public $email;
    public $password;
    public $remember;
//    protected $rules = [
//        'email' => 'required|email',
//        'password' => 'required|min:5',
//        'remember' => 'nullable'
//    ];

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:5',
            'remember' => 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Custom Email Message is required',
        ];
    }

    public function attributes()
    {
        return [
            'password' => 'Your Password mf',
        ];
    }

//      this didn't work for me -_-

//    public function updatedEmail()
//    {
//        $this->validateOnly('email');
//    }
    public function submit()
    {
        $this->validate($this->rules(), $this->messages(), $this->attributes());
//        dd('the form is submitted');
    }
    public function render()
    {
        return view('livewire.validation-component');
    }
}
