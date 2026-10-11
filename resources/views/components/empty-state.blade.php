
@props([
    'title',
    'information',
    'action'
])

<h2>{{$title}}</h2>
<span>{{$information}}</span>
<x-button name="{{$action}}"></x-button>
