<?php

use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Accueil')] class extends Component {

    #[On('data-created')]
    public function refresh()
    {
    }

    #[\Livewire\Attributes\Computed]
    public function contactsCount()
    {
        return \App\Models\Contact::count();
    }

    #[\Livewire\Attributes\Computed]
    public function jirisCount()
    {
        return \App\Models\Jiri::count();

    }

    #[\Livewire\Attributes\Computed]
    public function projectsCount()
    {
        return \App\Models\Project::count();
    }
};
?>

<div>

    @if($this->jirisCount === 0)
        <x-modal name="jiri">
            <x-slot:empty_content>
                <x-empty-state title="Liste des Jiris" information="Aucun Jiri pour le moment"
                               action="Créer un Jiri" open-event="open-jiri"></x-empty-state>
            </x-slot:empty_content>

            <livewire:livewire.form.create_jiri/>
        </x-modal>
    @else
        <livewire:livewire.pages.jiri/>
    @endif


    @if($this->contactsCount === 0)
        <x-modal name="contact">
            <x-slot:empty_content>
                <x-empty-state title="Liste des Contacts" information="Aucun Contact pour le moment"
                               action="Créer un Contact" open-event="open-contact"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.create_contact/>
        </x-modal>
    @else
        <livewire:livewire.pages.contact/>
    @endif

    @if($this->projectsCount === 0)
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
