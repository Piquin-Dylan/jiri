<?php

use App\Models\Project;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component {

    public $query = "";

    public $test;


    #[On('data-created')]
    public function refresh()
    {
    }

    #[\Livewire\Attributes\Computed]
    public function projects()
    {
        return Project::where('user_id', Auth::id())
            ->when($this->query, fn($q) => $q->where('projects.name_project', 'like', "%{$this->query}%"))
            ->get();
    }
};
?>

<div>
    <div class="flex justify-between py-6 pr-4">
        <h2 class=" title flex items-center">Liste des projets</h2>
        <x-modal name="project">
            <x-slot:empty_content>
                <x-empty-state
                    action="Créer un Projet" open-event="open-project"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.create_project></livewire:livewire.form.create_project>
        </x-modal>
    </div>
    <x-search-bar wire:model.live="query" placeHolder="Rechercher un projet"></x-search-bar>
    @if($this->projects->isEmpty() )
        <x-modal name="project">
            <x-slot:empty_content>
                <x-empty-state information="Aucun projet pour le moment"
                               action="Créer un projet" open-event="open-project"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.create_project></livewire:livewire.form.create_project>
        </x-modal>
    @else





    @endif
    <div class="md:flex md:justify-between">
        @foreach($this->projects as $project)
            <x-project-card title="{{$project->name_project}}"
                            content="{{$project->description}}"></x-project-card>
        @endforeach
    </div>
</div>
