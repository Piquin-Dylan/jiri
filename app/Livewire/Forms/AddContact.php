<?php

namespace App\Livewire\Forms;

use App\Models\Jiri;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AddContact extends Form
{
    public Jiri $jiri;

    #[Validate('required')]
    public $contact = [];

    public function store(): void
    {
        $this->validate();

        $this->jiri->contacts()->syncWithoutDetaching($this->contact);

    }
}
