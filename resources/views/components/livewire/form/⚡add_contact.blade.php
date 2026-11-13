<?php

use App\Livewire\Forms\AddContact;
use App\Models\Contact;
use App\Models\Jiri;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component {

    public AddContact $form;

    public $query = "";


    public function mount(Jiri $jiri): void
    {
        $this->form->jiri = $jiri;
    }

    #[\Livewire\Attributes\Computed]
    public function contacts()
    {
        return Contact::where('contacts.name', 'like', "%{$this->query}%")->get();
    }


    public function save()
    {
        $this->form->store();


        $this->dispatch('close-contact');
        $this->dispatch('data-added');
    }
};
?>

<div>
    <form class="form" wire:submit.prevent="save">

        <x-form.title_subtitle title="Ajouter des contacts"
                               subtitle="Ajouter des contacts a votre jiri"></x-form.title_subtitle>

        <div class="grid mt-4">
            <x-button name="Créer un contact"></x-button>
        </div>

        <x-search-bar wire:model.live="query" class="mt-6 mb-6" placeHolder="Rechercher un contact"></x-search-bar>

        @foreach($this->contacts as $contact)
            <div class="flex row justify-between mb-6">
                <div>
                    <div class="flex justify-between p-4">

                        <div class="flex gap-3 mb-6">
                            <span class="m-auto">JD</span>


                            <div class="grid gap-1">
                                <span>{{$contact->name}}</span>
                                <span>{{$contact->email}}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <x-form.select label_name="role" for_label="role" name="role" id="role"
                               :options="\App\Enums\ContactRole::cases()"
                               wire:model="form.status.{{ $contact->id }}"></x-form.select>
            </div>
        @endforeach

        <div class="grid mt-4">
            <x-button name="Ajouter le contact"></x-button>
        </div>
    </form>
</div>
