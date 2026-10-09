
@props([
    'link',
    'name'
])
<li>
    <a href="{{route($link)}}"
       class="block w-full px-4 py-3 rounded-xl text-center">
        {{$name}}
    </a>
</li>
