<?php

use App\Models\Jiri;
use Illuminate\Support\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component {

    public $query = "";

    public string $filter = '';


    public function mount()
    {

        // $this->current_jiri = Jiri::whereDate('jiris.date_jiri', \Carbon\Carbon::today())->get();


        // $this->coming_jiri = Jiri::whereDate('jiris.date_jiri', '>', Carbon::today())->get();


        //   $this->archived = Jiri::whereDate('jiris.date_jiri', '<', Carbon::today())->get();
    }

    public function currentJiri()
    {
        return Jiri::whereDate('jiris.date_jiri', \Carbon\Carbon::today())->get();
    }


    #[On('data-created')]
    public function refresh()
    {
    }

    #[\Livewire\Attributes\Computed]
    public function jiris()
    {
        return Jiri::where('user_id', Auth::id())->when($this->filter === 'current', function ($q) {
            $q->whereDate('date_jiri', Carbon::now());
        })->when($this->filter === 'coming', function ($q) {
            $q->whereDate('date_jiri', '>', Carbon::now());
        })->when($this->filter === 'archived', function ($q) {
            $q->whereDate('date_jiri', '<', Carbon::now());
        })->when($this->query, fn($q) => $q->where('name_project', 'like', "%{$this->query}%"))
            ->get();
    }

};
?>

<div>
    <div class="flex justify-between pt-6 pr-4">

        <h2 class="title">Liste des jiris</h2>
        <x-modal name="jiris">
            <x-slot:empty_content>
                <x-empty-state
                    action="Créer un Jiri" open-event="open-jiris"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.create_jiri></livewire:livewire.form.create_jiri>
        </x-modal>
    </div>

    <x-search-bar wire:model.live="query" placeHolder="Rechercher un jiri"></x-search-bar>
    @if($this->jiris->isEmpty())
        <x-modal name="jiris">
            <x-slot:empty_content>
                <x-empty-state information="Aucun jiris pour le moment"
                               action="Créer un jiri" open-event="open-project"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.create_jiri></livewire:livewire.form.create_jiri>
        </x-modal>
    @endif

    <span wire:click="$set('filter','current')">current jiri</span>
    <span wire:click="$set('filter','coming')">coming jiri</span>
    <span wire:click="$set('filter','archived')">archived jiri</span>

    <div class="flex justify-between pt-6 pr-4">
        @foreach($this->jiris as $jiri)
            <x-jiri-card title="{{$jiri->name_project}}"
                         content="{{$jiri->description}} "
                         date="{{$jiri->date_jiri}}"
                         hours_start="{{$jiri->hours_start}}"
                         hours_end="{{$jiri->hours_end}}"
                         link="{{route('jiri-edit',$jiri->id)}}"></x-jiri-card>
        @endforeach
    </div>

</div>
