<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>


    <x-modal name="project">
        <x-slot:empty_content>
            <x-empty-state title="Listes des projets du jiri"
                           information="Aucun projet pour le moment est associé au jiri"
                           action="Ajouter un Projet" open-event="open-project"></x-empty-state>
        </x-slot:empty_content>
        <livewire:livewire.form.add_project></livewire:livewire.form.add_project>
    </x-modal>


    <x-modal name="contact">
        <x-slot:empty_content>
            <x-empty-state title="Listes des contacts du jiri"
                           information="Aucun contacts pour le moment est associé au jiri"
                           action="Ajouter un Contact" open-event="open-contact"></x-empty-state>
        </x-slot:empty_content>
        <livewire:livewire.form.add_contact></livewire:livewire.form.add_contact>
    </x-modal>
</div>
