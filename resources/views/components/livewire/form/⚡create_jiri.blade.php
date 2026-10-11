<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <form class="form" action="#" method="post">
        <x-form.title_subtitle title="Création d'un Jiri"
                               subtitle="Créer votre premier Jiri pour gérer votre jury"></x-form.title_subtitle>
        <x-form.input label="Nom du projet" name="project" type="text" placeHolder="Jury de pw 25/26"></x-form.input>
        <x-form.input label="Description" name="desc" type="text"></x-form.input>
        <x-form.input label="Date du jiri" name="date" type="date"></x-form.input>
        <x-form.input label="Heure de début" name="hour" type="time"></x-form.input>
        <x-form.input label="Heure de fin" name="hour" type="time"></x-form.input>


        <div class="grid">
        <x-button name="Créer le Jiri"></x-button>
        </div>
    </form>
</div>
