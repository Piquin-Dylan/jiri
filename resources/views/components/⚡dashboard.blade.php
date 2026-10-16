<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>

    <x-empty-state title="Liste des Jiris" information="Aucun Jiri pour le moment"
                   action="Créer un Jiri"></x-empty-state>
    <livewire:livewire.form.create_jiri></livewire:livewire.form.create_jiri>


    <x-empty-state title="Liste des Contacts" information="Aucun Contact pour le moment"
                   action="Créer un Contact"></x-empty-state>
    <livewire:livewire.form.create_contact></livewire:livewire.form.create_contact>

    <x-empty-state title="Liste des projets" information="Aucun Projet pour le moment"
                   action="Créer un Projet"></x-empty-state>
    <livewire:livewire.form.create_project></livewire:livewire.form.create_project>


</div>
