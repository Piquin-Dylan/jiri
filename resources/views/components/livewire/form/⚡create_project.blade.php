<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <form class="form" action="#" method="post">
        <x-form.title_subtitle title="Création d'un projet"
                               subtitle="Créer votre premier projet pour gérer votre jury"></x-form.title_subtitle>
        <x-form.input label="Nom du projet" name="project" type="text" placeHolder="Site client"></x-form.input>
        <x-form.input label="Description" name="desc" type="text"></x-form.input>
        <x-form.input label="Lien du cahier des charges" name="cahier" type="text"></x-form.input>
        <x-form.input label="Taches" name="tache" type="text"></x-form.input>


        <div class="grid">
            <x-button name="Créer le Projet"></x-button>
        </div>
    </form>
</div>
