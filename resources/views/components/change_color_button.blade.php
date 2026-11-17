@props(['options', 'model' => 'filter'])

<div x-data class="flex justify-center pt-6 mb-6 gap-4">
    @foreach ($options as $value => $label)
        <button
            type="button"
            wire:click="$set('{{ $model }}', '{{ $value }}')"
            :class="$wire.{{ $model }} === '{{ $value }}' ? 'bg-[#385A87] text-white' : 'bg-white text-[#385A87]'"
            class="cursor-pointer p-4 rounded-2xl text-xl font-bold">
            {{ $label }}
        </button>
    @endforeach
</div>
