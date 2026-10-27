<?php

use App\Livewire\Forms\CreateProject;
use Livewire\Component;

new class extends Component {

    public CreateProject $form;

    public function save(): void
    {
        $this->form->store();
    }
};
?>

<div>
    <form wire:submit.prevent="save" class="form" action="#" method="post">
        <x-form.title_subtitle title="Création d'un projet"
                               subtitle="Créer votre premier projet pour gérer votre jury"></x-form.title_subtitle>
        <x-form.input label="Nom du projet" name="project" type="text" placeHolder="Site client" model="form.name_project"></x-form.input>
        <x-form.input label="Description" name="desc" type="text" model="form.description"></x-form.input>
        <x-form.input label="Lien du cahier des charges" name="cahier" type="text" model="form.link"></x-form.input>
        <x-form.input label="Taches" name="tache" type="text" model="form.tasks"></x-form.input>


        <div class="grid">
            <x-button name="Créer le Projet"></x-button>
        </div>
    </form>
</div>
