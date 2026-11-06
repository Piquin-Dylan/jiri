@props([
    'title'=>'',
    'information'=>"",
    'action'=>"",
    'openEvent'=>''
])

<div class="flex flex-col gap-4  mt-6 mb-6">
    <h2 class="title  text-center">{{$title}}</h2>
    <span class="title text-center justify-center">{{$information}}</span>
    <x-button class=""
        x-on:click="$dispatch('{{ $openEvent }}')"
        type="button" name="{{$action}}"></x-button>
</div>
