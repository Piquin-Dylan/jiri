<?php

namespace App\Livewire\Forms;


use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateContact extends Form
{
    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $email = '';

    #[Validate('required')]
    public $photo = '';


    public function store(): void
    {
        $this->validate();

        $user = Auth::user()->getAuthIdentifier();


        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'photo' => $this->photo,
            'user_id' => $user

        ]);
    }
}

