@props([
    'title',
    'information',
    'action',
    'openEvent'=>'open-modal'
])

<h2>{{$title}}</h2>
<span>{{$information}}</span>
<x-button
    x-on:click="$dispatch('{{ $openEvent }}')"
    type="button" name="{{$action}}"></x-button>
