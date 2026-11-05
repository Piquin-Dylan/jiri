@props([
    'title'=>'',
    'information'=>"",
    'action',
    'openEvent'=>'open-modal'
])

<div class="flex justify-between mb-6">
    <h2 class="title">{{$title}}</h2>
    <span>{{$information}}</span>
    <x-button
        x-on:click="$dispatch('{{ $openEvent }}')"
        type="button" name="{{$action}}"></x-button>
</div>

