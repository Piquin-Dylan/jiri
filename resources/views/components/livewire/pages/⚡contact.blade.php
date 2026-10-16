<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <h2 class="text-xl font-bold mb-4">Liste des Contacts</h2>

    <x-search-bar placeHolder="Rechercher un contact"></x-search-bar>

    <x-contact-card name="John Dupont" email="john.dupont@gmail.com" ></x-contact-card>
    <x-contact-card name="John Dupont" email="john.dupont@gmail.com" ></x-contact-card>
    <x-contact-card name="John Dupont" email="john.dupont@gmail.com" ></x-contact-card>
    <x-contact-card name="John Dupont" email="john.dupont@gmail.com" ></x-contact-card>
    <x-contact-card name="John Dupont" email="john.dupont@gmail.com" ></x-contact-card>
</div>
