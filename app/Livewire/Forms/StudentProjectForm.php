<?php

namespace App\Livewire\Forms;

use App\Models\Contact;
use Livewire\Form;

class StudentProjectForm extends Form
{
    public Contact $contact;

    public array $projects = [];

    public function store(): void
    {

        $sync = collect($this->projects)
            ->filter(fn ($p) => $p['selected'])
            ->map(fn ($p) => [
                'link_website' => $p['link_website'],
                'link_github' => $p['link_github'],
            ])
            ->all();

        $this->contact->projects()->syncWithoutDetaching($sync);
    }
}
