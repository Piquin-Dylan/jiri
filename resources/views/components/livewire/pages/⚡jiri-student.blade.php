<?php

use Livewire\Component;

new class extends Component {

    public $jiri;
    public $student;
    public $project;

    public function mount($jiri, $student)
    {
        $this->jiri = \App\Models\Jiri::findOrFail($jiri);
        $this->student = \App\Models\Contact::findOrFail($student);

        $this->project = $this->jiri->projects;

    }
};
?>

<div>
    <div class="flex justify-between mr-4 mb-8">
        <h2 class="title">{{$jiri->name_project}}</h2>
        <span class="title">{{$jiri->date_jiri}} - {{$jiri->hours_start}} - {{$jiri->hours_end}}</span>
    </div>

    <span class="title">Fiche de {{$this->student->name}}</span>

@foreach($this->project as $p)
    <div class="flex flex-col">
    <span>{{$p->name_project}}</span>
    </div>
@endforeach

</div>
