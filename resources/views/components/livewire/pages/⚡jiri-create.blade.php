<?php

use App\Models\Contact;
use App\Models\Jiri;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Jiri-edit')] class extends Component {

    public Jiri $jiri;

    public \Illuminate\Database\Eloquent\Collection $contacts;
    public \Illuminate\Database\Eloquent\Collection $projects;

    public function mount($jiri)
    {
        $this->jiri = $jiri;

        $this->contacts = $this->jiri->contacts;
        $this->projects = $this->jiri->projects;


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
        <x-search-bar placeHolder="Rechercher un contact"></x-search-bar>

    @endif
    @foreach($this->contacts as $c)
        <x-contact-card href="{{route('jiri-student',[
        'jiri'=>$this->jiri->id,
        'student' => $c->id
])}}" name="{{$c->name}}"
                        email="{{$c->email}}"></x-contact-card>
    @endforeach
</div>
