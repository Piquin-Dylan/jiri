<?php

use App\Livewire\Forms\AddProject;
use App\Models\Jiri;
use Livewire\Component;

new class extends Component {

    public AddProject $form;
    public Jiri $jiri;


    public function mount(Jiri $jiri): void
    {
        $this->form->jiri = $jiri;
    }

    #[\Livewire\Attributes\Computed]
    public function projects()
    {
        return \App\Models\Project::orderBy('name')->get();
    }

    public function save(): void
    {
        $this->form->store();
    }
};
?>

<div>
    <form class="form" wire:submit.prevent="save">

        <x-form.title_subtitle title="Ajouter un projet"
                               subtitle="Ajouter des projets a votre jiri"></x-form.title_subtitle>

        <div class="grid mr-4">
            <x-button name="Créer un projet"></x-button>
        </div>
        <x-search-bar class="mt-6 mb-6" placeHolder="Rechercher un projet"></x-search-bar>

        @foreach($this->projects as $project)
            <div class="flex row justify-between mb-6">
                <div>
                    <span class="text-[16px] font-bold">{{$project->name_project}}</span>
                    <p class="text-[14px] mt-2">{{$project->description}}</p>
                </div>
                <input value="{{$project->id}}" type="checkbox" wire:model="form.project">
            </div>
        @endforeach


        <div class="grid">
            <x-button name="Ajouter le projet"></x-button>
        </div>
    </form>
</div>
