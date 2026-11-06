<?php

use App\Models\Contact;
use Livewire\Component;

new class extends Component {

    public $query = "";

    #[\Livewire\Attributes\Computed]
    public function contacts()
    {

        return Contact::where('user_id', Auth::id())
            ->when($this->query, fn($q) => $q->where('contacts.name', 'like', "%{$this->query}%"))
            ->get();
    }
};
?>

<div>
    <div class="flex justify-between pt-6 pr-4">
        <h2 class="text-xl font-bold flex items-center">Liste des Contacts</h2>
        <x-modal name="contact">
            <x-slot:empty_content>
                <x-empty-state
                    action="Créer un Contact" open-event="open-contact"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.create_contact></livewire:livewire.form.create_contact>
        </x-modal>
    </div>

    <x-search-bar wire:model.live="query" placeHolder="Rechercher un contact"></x-search-bar>
@if($this->contacts->isEmpty())
        <x-modal name="contact">
            <x-slot:empty_content>
                <x-empty-state information="Aucun Contact pour le moment"
                               action="Créer un Contact" open-event="open-contact"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.create_contact></livewire:livewire.form.create_contact>
        </x-modal>
    @endif

    @foreach($this->contacts as $contact)
        <x-contact-card name="{{$contact->name}}" email="{{$contact->email}}"></x-contact-card>
    @endforeach

</div>
