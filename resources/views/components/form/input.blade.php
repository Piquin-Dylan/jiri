@props([
    'name',
    'label',
    'type',
    'placeHolder'=>''
])
<div {{ $attributes }} class="grid gap-2 mt-4">

    <label class="flex" for="{{$name}}">{{$label}}</label>
    <input class="rounded-lg p-4 border border-[#DEE3EA]" type="{{$type}}" id="{{$name}}" name="{{$name}}"
           placeholder="{{$placeHolder}}">

    @error($name)
    <p class="text-white">{{$message}}</p>
    @enderror
</div>
