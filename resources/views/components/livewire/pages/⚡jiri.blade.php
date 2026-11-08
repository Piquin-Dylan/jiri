<?php

use App\Models\Jiri;
use Livewire\Attributes\On;
use Livewire\Component;

new class extends Component {

    public $query = "";

    #[On('data-created')]
    public function refresh()
    {
    }

    #[\Livewire\Attributes\Computed]
    public function jiris()
    {
        return Jiri::where('user_id', Auth::id())
            ->when($this->query, fn($q) => $q->where('name_project', 'like', "%{$this->query}%"))
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
    @foreach($this->jiris as $jiri)
        <x-jiri-card title="{{$jiri->name_project}}"
                     content="{{$jiri->description}} "
                     date="{{$jiri->date_jiri}}"
                     hours_start="{{$jiri->hours_start}}"
                     hours_end="{{$jiri->hours_end}}"
                     link="{{route('jiri-edit',$jiri->id)}}"></x-jiri-card>
    @endforeach
</div>
