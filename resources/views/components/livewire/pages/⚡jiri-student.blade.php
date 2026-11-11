<?php

use App\Livewire\Forms\StudentProjectForm;
use App\Models\Contact;
use App\Models\Jiri;
use Livewire\Component;

new class extends Component {

    public StudentProjectForm $form;

    public $jiri;
    public $student;
    public $project;

    public $contact;


    public function mount($jiri, $student)
    {
        $this->jiri = Jiri::findOrFail($jiri);
        $this->student = Contact::findOrFail($student);
        $this->project = $this->jiri->projects;
        $this->form->contact = $this->student;

        $this->contact = $this->student->projects;

        foreach ($this->contact as $c) {
            $this->form->projects[$c->id] = [
                'selected' => true,
                'link_website' => $c->pivot->link_website,
                'link_github' => $c->pivot->link_github,
            ];
        }


    }


    public function save()
    {
        $this->form->store();
    }
};
?>

<div>
    <div class="flex justify-between mr-4 mb-8">
        <h2 class="title">{{ $jiri->name_project }}</h2>
        <span class="title">{{ $jiri->date_jiri }} - {{ $jiri->hours_start }} - {{ $jiri->hours_end }}</span>
    </div>

    <span class="title">Fiche de {{ $student->name }}</span>


    <form wire:submit="save">
        @foreach($project as $p)
            <div class="flex flex-col gap-4 px-6 py-6 mb-6 mt-6 border  border-[#385A87] rounded-2xl">
                <div class="flex flex-row gap-4 ">
                    <input class="w-[24px]" wire:model="form.projects.{{ $p->id }}.selected" type="checkbox">
                    <span class="text-xl font-bold">{{ $p->name_project }}</span>

                </div>

                <x-form.input model="form.projects.{{ $p->id }}.link_website"
                              name="website-{{ $p->id }}" label="Lien du site" type="text"
                              placeHolder="https://site-client.com"></x-form.input>

                <x-form.input model="form.projects.{{ $p->id }}.link_github"
                              name="github-{{ $p->id }}" label="Lien du github"
                              type="text"
                              placeHolder="https://github.com/site-client"></x-form.input>
            </div>
        @endforeach

        <x-button name="Enregistrer"></x-button>
    </form>
</div>
