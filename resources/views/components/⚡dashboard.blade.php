<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>

    <div
        x-data="{ open: false }"
        x-on:open-modal.window="open = true"
        x-on:close-modal.window="open = false"
        x-on:keydown.escape.window="open = false">

        <x-empty-state
            title="Liste des Jiris"
            information="Aucun Jiri pour le moment"
            action="Créer un Jiri"></x-empty-state>

        <div
            x-show="open"
            x-transition.opacity
            x-on:click.self="open = false"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4">

            <div class="modal">
                <button
                    type="button"
                    x-on:click="open = false"
                    class="absolute top-3 right-3 text-2xl  cursor-pointer">X
                </button>

                <livewire:livewire.form.create_jiri/>
            </div>
        </div>
    </div>

    <x-empty-state title="Liste des Contacts" information="Aucun Contact pour le moment"
                   action="Créer un Contact"></x-empty-state>
    <livewire:livewire.form.create_contact></livewire:livewire.form.create_contact>

    <x-empty-state title="Liste des projets" information="Aucun Projet pour le moment"
                   action="Créer un Projet"></x-empty-state>
    <livewire:livewire.form.create_project></livewire:livewire.form.create_project>


</div>
