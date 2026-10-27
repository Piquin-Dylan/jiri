<?php

namespace App\Livewire\Forms;


use App\Models\Project;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AddProject extends Form
{
    #[Validate('required')]
    public $name_project = '';

    #[Validate('required')]
    public $description = '';

    #[Validate('required')]
    public $link = '';

    #[Validate('required')]
    public $tasks = '';




    public function store(): void
    {
        $this->validate();

        Project::create([
            'name_project' => $this->name_project,
            'description' => $this->description,
            'link' => $this->link,
            'task' => $this->tasks,

        ]);
    }
}

