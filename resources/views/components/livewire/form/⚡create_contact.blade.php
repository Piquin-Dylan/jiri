<?php

use App\Livewire\Forms\CreateContact;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component {

    use WithFileUploads;

    public CreateContact $form;

    public function save(): void
    {
        $this->form->store();
    }
};
?>

<div>
    <form wire:submit.prevent="save" class="form">
        <x-form.title_subtitle title="Création d'un contact"
                               subtitle="Créer votre premier contact pour gérer votre jury"></x-form.title_subtitle>
        <x-form.input label="Nom Complet" name="project" type="text" placeHolder="John Dupont"
                      model="form.name"></x-form.input>
        <x-form.input label="Email" name="desc" type="text" model="form.email"></x-form.input>
        <x-form.input label="Photo" name="photo" type="file" model="form.photo"></x-form.input>


        <div class="grid">
            <x-button name="Créer le Contact"></x-button>
        </div>
    </form>
</div>
