@props([
    'name',
    'email',
    'href' => null,
    'delete'=>null,
    'role'=>null
])

<div class="flex justify-between p-4">

    <div class="flex gap-3 mb-6">
        <span class="m-auto">JD</span>

        <div class="grid gap-1">
            @if ($href)
                <a  href="{{ $href }}" class="hover:underline font-bold">{{ $name }} - {{$role}}</a>
            @else
                <span>{{ $name }}</span>
            @endif
            <span>{{ $email }}</span>
        </div>
    </div>

    <div>
        <span wire:click="{{$delete}}" class="mr-4 cursor-pointer">Supprimer</span>

        @if ($href)
            <a href="{{ $href }}">Voir</a>
        @else
            <span>Voir</span>
        @endif
    </div>

</div>
