@props([
        'name'
])


<button
    type="submit"
    {{ $attributes->merge([
       'class' => 'bg-[#385A87] p-4 text-white rounded-[8px] cursor-pointer hover:bg-white
        hover:text-[#385A87] hover:border-1 hover:border-[#385A87]'
   ]) }}
    >
    {{$name}}
</button>
