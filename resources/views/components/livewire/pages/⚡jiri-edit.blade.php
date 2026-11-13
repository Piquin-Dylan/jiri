<?php

use App\Models\Jiri;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Jiri-edit')] class extends Component {


    public Jiri $jiri;

    public $search_contact = "";
    public $search_project = "";

    public string $filter = 'evaluators';


    public $contact;


    #[On('data-added')]
    public function refresh()
    {
    }

    public function mount($jiri)
    {
        $this->jiri = $jiri;

    }


    #[\Livewire\Attributes\Computed]
    public function contacts()
    {
        return $this->jiri->{$this->filter}()
            ->when($this->search_contact, fn($q) => $q->where('contacts.name', 'like', "%{$this->search_contact}%"))
            ->get();
    }

    #[\Livewire\Attributes\Computed]
    public function projects()
    {
        return $this->jiri->projects()->when($this->search_project, fn($q) => $q->where('projects.name_project', 'like', "%{$this->search_project}%"))->get();
    }


    public function deleteContact($contactId): void
    {
        $this->jiri->contacts()->detach($contactId);
    }
};
?>

<div>

    <div class="flex justify-between mr-4 mb-8">
        <h2 class="title">{{$jiri->name_project}}</h2>
        <span class="title">{{$jiri->date_jiri}} - {{$jiri->hours_start}} - {{$jiri->hours_end}}</span>
    </div>

    @if($this->projects->isEmpty())
        <x-modal name="project">
            <x-slot:empty_content>
                <x-empty-state title="Listes des projets du jiri"
                               information="Aucun projet pour le moment est associé au jiri"
                               action="Ajouter un Projet" open-event="open-project"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.add_project :jiri="$jiri"></livewire:livewire.form.add_project>

            <x-drawer event="Créer un projet"
                      openEvent="open-project"
                      :showButton="true">

                <livewire:livewire.form.create_project></livewire:livewire.form.create_project>
            </x-drawer>
        </x-modal>
    @else
        <x-modal name="project">
            <x-slot:empty_content>
                <x-empty-state title="Listes des projets du jiri"
                               action="Ajouter un Projet" open-event="open-project"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.add_project :jiri="$jiri"></livewire:livewire.form.add_project>
        </x-modal>
        <x-search-bar wire:model.live="search_project" placeHolder="Rechercher un projet"></x-search-bar>

    @endif
    <div class="md:flex md:justify-between mb-16">

        @foreach($this->projects as $p)
            <x-project-card title="{{$p->name_project}}"
                            content="{{$p->description}}"></x-project-card>
        @endforeach
    </div>

    @if($this->contacts->isEmpty())

        <x-modal name="contact">
            <x-slot:empty_content>
                <x-empty-state title="Listes des contacts du jiri"
                               information="Aucun contacts pour le moment est associé au jiri"
                               action="Ajouter un Contact" open-event="open-contact"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.add_contact :jiri="$jiri"></livewire:livewire.form.add_contact>
        </x-modal>
    @else
        <x-modal name="contact">
            <x-slot:empty_content>
                <x-empty-state title="Listes des contacts du jiri"
                               action="Ajouter un Contact" open-event="open-contact"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.add_contact :jiri="$jiri"></livewire:livewire.form.add_contact>
        </x-modal>

    @endif
    <x-search-bar wire:model.live="search_contact" placeHolder="Rechercher un contact"></x-search-bar>


    <div x-data="{ highlightedButton: 'evaluators' }" class="flex justify-center pt-6 mb-6 gap-4">
    <span @click="highlightedButton = 'evaluators'"
          :class="highlightedButton === 'evaluators' ? 'bg-[#385A87] text-white' : 'bg-white text-[#385A87]'"
          class="cursor-pointer p-4 rounded-2xl text-xl font-bold"
          wire:click="$set('filter', 'evaluators')">Evaluators</span>

        <span @click="highlightedButton = 'evaluated'"
              :class="highlightedButton === 'evaluated' ? 'bg-[#385A87] text-white' : 'bg-white text-[#385A87]'"
              class="cursor-pointer p-4 rounded-2xl text-xl font-bold"
              wire:click="$set('filter', 'evaluated')">Students</span>
    </div>


    @foreach($this->contacts as $c)
        <x-contact-card href="{{route('jiri-student',[
        'jiri'=>$this->jiri->id,
        'student' => $c->id])}}"
                        role="{{$c->pivot->role}}"
                        name="{{$c->name}}"
                        email="{{$c->email}}"
                        delete="deleteContact('{{$c->id}}')">
        </x-contact-card>
    @endforeach
</div>
