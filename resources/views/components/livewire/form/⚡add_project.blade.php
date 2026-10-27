<?php

use App\Livewire\Forms\AddProject;
use Livewire\Component;

new class extends Component {

    public AddProject $form;

    #[\Livewire\Attributes\Computed]
    public function projects()
    {
        return \App\Models\Project::orderBy('name')->get();
    }
};
?>

<div>
    <form class="form" action="#" method="post">

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
                <input type="checkbox">
            </div>
        @endforeach


        <div class="grid">
            <x-button name="Ajouter le projet"></x-button>
        </div>
    </form>
</div>
