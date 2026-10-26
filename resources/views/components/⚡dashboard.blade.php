<?php

use Livewire\Component;

new class extends Component {
    #[\Livewire\Attributes\Computed]
    public function contacts()
    {
        return \App\Models\Contact::orderBy('name')->get();
    }

    #[\Livewire\Attributes\Computed]
    public function jiris()
    {
        return \App\Models\Jiri::orderBy('name')->get();
    }

    #[\Livewire\Attributes\Computed]
    public function projects()
    {
        return \App\Models\Project::orderBy('name')->get();
    }
};
?>

<div>

    @if($this->jiris->isEmpty())
        <x-modal name="jiri">
            <x-slot:empty_content>
                <x-empty-state title="Liste des Jiris" information="Aucun Jiri pour le moment"
                               action="Créer un Jiri" open-event="open-jiri"></x-empty-state>
            </x-slot:empty_content>

            <livewire:livewire.form.create_jiri/>
        </x-modal>
    @else
        <livewire:livewire.pages.jiri></livewire:livewire.pages.jiri>
    @endif


    @if($this->contacts->isEmpty())
        <x-modal name="contact">
            <x-slot:empty_content>
                <x-empty-state title="Liste des Contacts" information="Aucun Contact pour le moment"
                               action="Créer un Contact" open-event="open-contact"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.create_contact></livewire:livewire.form.create_contact>
        </x-modal>
    @else
        <livewire:livewire.pages.contact></livewire:livewire.pages.contact>
    @endif

    @if($this->projects->isEmpty())
        <x-modal name="project">
            <x-slot:empty_content>
                <x-empty-state title="Liste des projets" information="Aucun Projet pour le moment"
                               action="Créer un Projet" open-event="open-project"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.create_project></livewire:livewire.form.create_project>
        </x-modal>
    @else
        <livewire:livewire.pages.project></livewire:livewire.pages.project>
        @endif
</div>
