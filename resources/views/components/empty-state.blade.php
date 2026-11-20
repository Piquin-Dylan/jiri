@props([
    'title'=>'',
    'information'=>"",
    'action'=>"",
    'openEvent'=>'',
    'jiri'=>null
])

<div class="flex justify-between gap-4 mt-6 mb-6">
    <h2 class="title text-center">{{$title}}</h2>

    <span class="text-xl font-bold flex items-center text-center justify-center">
        {{$information}}
    </span>

    @can('update', $jiri)
        <x-button
            x-on:click="$dispatch('{{ $openEvent }}')"
            type="button"
            name="{{$action}}">
        </x-button>
    @endcan
</div>
