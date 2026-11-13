<?php

use App\Livewire\Forms\AddContact;
use App\Models\Contact;
use App\Models\Jiri;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component {

    public AddContact $form;
    public Jiri $jiri;


    public $query = "";


    #[On('data-created')]
    public function refresh()
    {
    }


    public function mount(Jiri $jiri): void
    {
        $this->form->jiri = $jiri;


        $this->form->status = $this->jiri->contacts()
            ->pluck('role', 'contact_id')
            ->toArray();


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
    <x-drawer event="Créer un contact"
              openEvent="data-created"
              :showButton="true">
        <livewire:livewire.form.create_contact></livewire:livewire.form.create_contact>
    </x-drawer>

    <form class="form" wire:submit.prevent="save">
        <x-form.title_subtitle title="Ajouter des contacts"
                               subtitle="Ajouter des contacts a votre jiri"></x-form.title_subtitle>
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
