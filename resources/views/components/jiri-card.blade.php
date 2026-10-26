@props([
    'title',
    'content',
    'date'=>'',
    'hours_start'=>"",
    'hours_end'=>"",
    'link'
])

<div class="bg-white rounded-xl p-4 max-w-[300px] m-auto mt-4">
    <a href="{{$link}}" class="text-[16px] font-bold">{{ $title }}</a>
    <p class="text-[14px] mt-2 mb-2">{{ $content }}</p>
    <span class="">{{ $date }} / {{$hours_start}} - {{$hours_end}}</span>
</div>
