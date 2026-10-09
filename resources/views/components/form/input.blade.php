@props([
    'name',
    'label',
    'type',
    'placeHolder'=>''
])


<label for="{{$name}}">{{$label}}</label>
<input type="{{$type}}" id="{{$name}}" name="{{$name}}" placeholder="{{$placeHolder}}">
