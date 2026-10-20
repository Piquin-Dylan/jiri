@props([
    'placeHolder' => '',
])

<input
    {{ $attributes->merge([
        'class' => 'w-full py-4 px-3 border-2 border-[#DEE3EA] text-[#8A94A3] text-sm rounded-2xl pr-4'
    ]) }}
    type="search"
    placeholder="{{ $placeHolder }}"
>
