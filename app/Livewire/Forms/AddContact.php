<?php

namespace App\Livewire\Forms;

use App\Models\Jiri;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AddContact extends Form
{
    public Jiri $jiri;

    #[Validate('required')]
    public $status = [];

    public function store(): void
    {
        $this->validate();

        $sync = collect($this->status)
            ->filter()
            ->map(fn ($role) => ['role' => $role]);

        $this->jiri->contacts()->syncWithoutDetaching($sync);

    }
}
