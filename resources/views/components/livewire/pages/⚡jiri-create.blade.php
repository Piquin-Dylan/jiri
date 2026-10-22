<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <x-empty-state title="Listes des projets du jiri" information="Aucun projet pour le moment est associé au jiri"
                   action="Ajouter un Projet"></x-empty-state>

    <form class="form" action="#" method="post">

        <x-form.title_subtitle title="Ajouter un projet"
                               subtitle="Ajouter des projets a votre jiri"></x-form.title_subtitle>

        <div class="grid mr-4">
            <x-button name="Créer un projet"></x-button>
        </div>
        <x-search-bar class="mt-6 mb-6" placeHolder="Rechercher un projet"></x-search-bar>

        <div class="flex row justify-between mb-6">
            <div>
                <span class="text-[16px] font-bold">Site client</span>
                <p class="text-[14px] mt-2">test test</p>
            </div>
            <input type="checkbox">
        </div>
        <div class="flex row justify-between">
            <div>
                <span class="text-[16px] font-bold">Site client</span>
                <p class="text-[14px] mt-2">test test</p>
            </div>
            <input type="checkbox">
        </div>


        <div class="grid">
            <x-button name="Ajouter le projet"></x-button>
        </div>
    </form>
    <x-empty-state title="Listes des contacts du jiri" information="Aucun contacts pour le moment est associé au jiri"
                   action="Ajouter un Contact"></x-empty-state>
    <form class="form" action="#" method="post">

        <x-form.title_subtitle title="Ajouter des contacts"
                               subtitle="Ajouter des contacts a votre jiri"></x-form.title_subtitle>

        <div class="grid mr-4">
            <x-button name="Créer un contact"></x-button>
        </div>
        <x-search-bar class="mt-6 mb-6" placeHolder="Rechercher un contact"></x-search-bar>

        <div class="flex row justify-between mb-6">
            <div>
                <div class="flex justify-between p-4">

                    <div class="flex gap-3 mb-6">
                        <span class="m-auto">JD</span>


                        <div class="grid gap-1">
                            <span>Jean</span>
                            <span>Dupont</span>
                        </div>
                    </div>
                </div>
            </div>
            <input type="checkbox">
        </div>
        <div class="grid">
            <x-button name="Ajouter le contact"></x-button>
        </div>
    </form>

</div>
