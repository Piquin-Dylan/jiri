<?php

use Livewire\Component;

new class extends Component {
    #[\Livewire\Attributes\Computed]
    public function jiris()
    {
        return \App\Models\Jiri::orderBy('name')->get();
    }
};
?>

<div>

    <div class="flex justify-between py-6 pr-4">
        <h2 class="text-xl font-bold flex items-center">Liste des jiris</h2>
        <x-modal name="jiris">
            <x-slot:empty_content>
                <x-empty-state
                    action="Créer un Jiri" open-event="open-jiris"></x-empty-state>
            </x-slot:empty_content>
            <livewire:livewire.form.create_jiri></livewire:livewire.form.create_jiri>
        </x-modal>
    </div>


    <x-search-bar placeHolder="Rechercher un jiri"></x-search-bar>
    <div class="md:flex md:justify-between">
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
                         link="{{route('jiri-create')}}"></x-jiri-card>
        @endforeach
    </div>
</div>
