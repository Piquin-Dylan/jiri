<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <form class="form" action="#" method="post">
        <x-form.title_subtitle title="Création d'un contact"
                               subtitle="Créer votre premier contact pour gérer votre jury"></x-form.title_subtitle>
        <x-form.input label="Nom Complet" name="project" type="text" placeHolder="John Dupont"></x-form.input>
        <x-form.input label="Email" name="desc" type="text"></x-form.input>
        <x-form.input label="Photo" name="photo" type="file"></x-form.input>


        <div class="grid">
            <x-button name="Créer le Jiri"></x-button>
        </div>
    </form>
</div>
