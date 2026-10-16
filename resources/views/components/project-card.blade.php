@props([
    'title',
    'content',
])

<div class="bg-white rounded-xl p-4  max-w-[300px] m-auto mt-4">
    <span class="text-[16px] font-bold">{{$title}}</span>
    <p class="text-[14px] mt-2">{{$content}}</p>
</div>
