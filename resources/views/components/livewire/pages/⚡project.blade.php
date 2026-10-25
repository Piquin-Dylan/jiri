<?php

use Livewire\Component;

new class extends Component {
    #[\Livewire\Attributes\Computed]
    public function projects()
    {
        return \App\Models\Project::orderBy('name')->get();
    }
};
?>

<div>
    <div class="flex justify-between py-6 pr-4">
        <h2 class="text-xl font-bold flex items-center">Liste des projets</h2>
        <x-modal name="project">
            <x-slot:empty_content>
                <x-empty-state
                    action="Créer un Projet" open-event="open-project"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.create_project></livewire:livewire.form.create_project>
        </x-modal>
    </div>
    <x-search-bar placeHolder="Rechercher un projet"></x-search-bar>

    @if($this->projects->isEmpty())
        <x-modal name="project">
            <x-slot:empty_content>
                <x-empty-state information="Aucun projet pour le moment"
                               action="Créer un projet" open-event="open-project"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.create_project></livewire:livewire.form.create_project>
        </x-modal>
    @endif
    <div class="md:flex md:justify-between">
        @foreach($this->projects as $project)
            <x-project-card title="{{$project->name_project}}"
                            content="{{$project->description}}"></x-project-card>
        @endforeach
    </div>
</div>
