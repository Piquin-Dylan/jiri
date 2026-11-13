@props([
    'name',
    'label',
    'type',
    'placeHolder'=>'',
    'model'=>'',
    'value'=>''
])
<div {{ $attributes }} class="grid gap-2 mt-4">

    <label class="flex text-black" for="{{$name}}">{{$label}}</label>
    <input class="rounded-lg p-4 border border-[#E6EAF0] bg-[#F9FAFC] text-black" type="{{$type}}"
           id="{{$name}}" name="{{$name}}"
           placeholder="{{$placeHolder}}"
           wire:model="{{ $model }}"
           value="{{$value}}"
    >

    @error($model)
    <p class="text-red-600">{{$message}}</p>
    @enderror
</div>
