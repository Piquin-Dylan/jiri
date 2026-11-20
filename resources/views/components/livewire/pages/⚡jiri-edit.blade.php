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
    public $evaluator;


    #[On('data-added')]
    public function refresh()
    {
    }

    public function mount($jiri = null, $token = null)
    {
        if ($token) {
            $this->jiri = Jiri::whereHas('evaluators', function ($query) use ($token) {
                $query->where('contact_jiri.token', $token);
            })->firstOrFail();

            return;
        }

        if ($jiri instanceof Jiri) {
            $this->jiri = $jiri;
        } else {
            $this->jiri = Jiri::findOrFail($jiri);
        }
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

    #[\Livewire\Attributes\Computed]
    public function evaluators()
    {
        return $this->jiri->evaluators;
    }

    public function sentMail()
    {

        $jiri = $this->jiri;

        foreach ($this->evaluators as $evaluator) {
            \Illuminate\Support\Facades\Mail::to($evaluator->email)
                ->send(new \App\Mail\EvaluatorsEmail($evaluator, $jiri));
        }
    }
};
?>

<div>

    <div class="flex justify-between mr-4 mb-8">
        <h2 class="title">{{$jiri->name_project}}</h2>
        @can('update', $jiri)
            <x-modal name="start">
                <x-slot:empty_content>
                    <x-empty-state
                        action="Démarrer le jiri" open-event="open-start"></x-empty-state>
                </x-slot:empty_content>
                @foreach($this->evaluators as $e)
                    <x-contact-card
                        name="{{$e->name}}"
                        email="{{$e->email}}">
                    </x-contact-card>
                @endforeach

                <x-button wire:click="sentMail()" name="Envoyer le mail"></x-button>
            </x-modal>
            <span class="title">{{$jiri->date_jiri}} - {{$jiri->hours_start}} - {{$jiri->hours_end}}</span>
        @endcan
    </div>

    @if($this->projects->isEmpty())

        <x-modal name="project">
            <x-slot:empty_content>
                <x-empty-state title="Listes des projets du jiri"
                               information="Aucun projet pour le moment est associé au jiri"
                               action="Ajouter un Projet"
                               open-event="open-project"
                               :jiri="$jiri"
                >

                </x-empty-state>
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

    @endif
    <x-search-bar wire:model.live="search_project" placeHolder="Rechercher un projet"></x-search-bar>
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
                               action="Ajouter un Contact" open-event="open-contact"
                               :jiri="$jiri"
                ></x-empty-state>
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


    @if($this->contacts->isNotEmpty())
        <x-change_color_button :options="['evaluators' => 'Evaluators', 'evaluated' => 'Students']"/>
    @endif

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
