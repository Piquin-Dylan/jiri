<?php

use Livewire\Component;

new class extends Component {

    public $jiri;

    public $contact;
    public $project;

    public function mount($jiri)
    {
        $this->jiri = \App\Models\Jiri::findOrFail($jiri);

        $this->contact = $this->jiri->contacts()->get();
        $this->project = $this->jiri->projects()->get();


    }
};
?>

<div>

    <div class="flex justify-between mr-4 mb-8">
        <h2 class="title">{{$jiri->name_project}}</h2>
        <span class="title">{{$jiri->date_jiri}} - {{$jiri->hours_start}} - {{$jiri->hours_end}}</span>
    </div>

    @if($this->project->isEmpty())
        <x-modal name="project">
            <x-slot:empty_content>
                <x-empty-state title="Listes des projets du jiri"
                               information="Aucun projet pour le moment est associé au jiri"
                               action="Ajouter un Projet" open-event="open-project"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.add_project :jiri="$jiri"></livewire:livewire.form.add_project>
        </x-modal>
    @else
        <x-modal name="project">
            <x-slot:empty_content>
                <x-empty-state title="Listes des projets du jiri"
                               action="Ajouter un Projet" open-event="open-project"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.add_project :jiri="$jiri"></livewire:livewire.form.add_project>
        </x-modal>
        <x-search-bar placeHolder="Rechercher un projet"></x-search-bar>

    @endif
    <div class="md:flex md:justify-between mb-16">

        @foreach($this->project as $p)
            <x-project-card title="{{$p->name_project}}"
                            content="{{$p->description}}"></x-project-card>
        @endforeach
    </div>


    @if($this->contact->isEmpty())
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
        <x-search-bar placeHolder="Rechercher un contact"></x-search-bar>

    @endif
    @foreach($this->contact as $c)
        <x-contact-card name="{{$c->name}}" email="{{$c->email}}"></x-contact-card>
    @endforeach
</div>
