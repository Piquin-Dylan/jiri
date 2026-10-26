<?php

use App\Livewire\Forms\CreateJiri;
use Livewire\Component;

new class extends Component {

    public CreateJiri $form;

    public function save(): void
    {
        $this->form->store();
    }

};
?>

<div>
    <form wire:submit.prevent="save" class="form">
        {{$slot}}
        <x-form.title_subtitle title="Création d'un Jiri"
                               subtitle="Créer votre premier Jiri pour gérer votre jury"></x-form.title_subtitle>
        <x-form.input label="Nom du projet" name="project" type="text" placeHolder="Jury de pw 25/26"
                      model="form.name_project"></x-form.input>
        <x-form.input label="Description" name="desc" type="text" model="form.description"></x-form.input>
        <x-form.input label="Date du jiri" name="date" type="date" model="form.date_jiri"></x-form.input>
        <x-form.input label="Heure de début" name="hour" type="time" model="form.hours_start"></x-form.input>
        <x-form.input label="Heure de fin" name="hour" type="time" model="form.hours_end"></x-form.input>


        <div class="grid">
            <x-button type="submit" name="Créer le Jiri"></x-button>
        </div>
    </form>
</div>
