<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <h2 class="text-xl font-bold mb-4">Liste des projets</h2>

    <x-search-bar placeHolder="Rechercher un projet"></x-search-bar>
    <div class="md:flex md:justify-between">
        <x-project-card title="Site Client"
                        content="Projet qui consiste à faire un site pour un vrai client dans condition réel avec un cahiers des charges "></x-project-card>
        <x-project-card title="Site Client"
                        content="Projet qui consiste à faire un site pour un vrai client dans condition réel avec un cahiers des charges "></x-project-card>
        <x-project-card title="Site Client"
                        content="Projet qui consiste à faire un site pour un vrai client dans condition réel avec un cahiers des charges "></x-project-card>
    </div>
    <div class="grid mr-4">
        <x-button name="Créer un projet"></x-button>
    </div>
</div>
