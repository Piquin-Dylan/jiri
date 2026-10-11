<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>

    <x-empty-state title="Liste des Jiris" information="Aucun Jiri pour le moment" action="Créer un Jiri"></x-empty-state>
    <livewire:livewire.form.create_jiri></livewire:livewire.form.create_jiri>




    <x-empty-state title="Liste des Jiris" information="Aucun Contact pour le moment" action="Créer un Contact"></x-empty-state>
    <x-empty-state title="Liste des Jiris" information="Aucun Projet pour le moment" action="Créer un Projet"></x-empty-state>



</div>
