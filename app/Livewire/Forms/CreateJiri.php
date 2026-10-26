<?php

namespace App\Livewire\Forms;


use App\Models\Jiri;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateJiri extends Form
{
    #[Validate('required')]
    public $name_project = '';

    #[Validate('required')]
    public $description = '';

    #[Validate('required')]
    public $date_jiri = '';


    #[Validate('required')]
    public $hours_start = '';

    #[Validate('required')]
    public $hours_end = '';


    public function store(): void
    {
        $this->validate();

        Jiri::create([
            'name_project' => $this->name_project,
            'description' => $this->description,
            'date_jiri' => $this->date_jiri,
            'hours_start' => $this->hours_start,
            'hours_end' => $this->hours_end,
        ]);
    }
}

