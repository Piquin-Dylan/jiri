<?php

use App\Livewire\Forms\AddContact;
use App\Models\Jiri;
use Livewire\Component;

new class extends Component {

    public AddContact $form;


    public function mount(Jiri $jiri): void
    {
        $this->form->jiri = $jiri;
    }

    #[\Livewire\Attributes\Computed]
    public function contacts()
    {
        return \App\Models\Contact::orderBy('name')->get();
    }


    public function save()
    {
        $this->form->store();
    }
};
?>

<div>
    <form class="form" wire:submit.prevent="save">

        <x-form.title_subtitle title="Ajouter des contacts"
                               subtitle="Ajouter des contacts a votre jiri"></x-form.title_subtitle>

        <div class="grid mr-4">
            <x-button name="Créer un contact"></x-button>
        </div>
        <x-search-bar class="mt-6 mb-6" placeHolder="Rechercher un contact"></x-search-bar>

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
                <input value="{{$contact->id}}" wire:model="form.contact" type="checkbox">
            </div>
        @endforeach

        <div class="grid">
            <x-button name="Ajouter le contact"></x-button>
        </div>
    </form>
</div>
