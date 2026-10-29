<?php

namespace App\Livewire\Forms;

use App\Models\Jiri;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AddProject extends Form
{
    public Jiri $jiri;

    #[Validate('required')]
    public $project = [];

    public function store(): void
    {
        $this->validate();

        $this->jiri->projects()->syncWithoutDetaching($this->project);

    }
}
