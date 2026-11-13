@props([
    'event' => null,
    'openEvent' => null,
    'showButton' => true,
])

<div class="mt-12 grid px-8"
    x-data="{ open: false }"
    @keydown.escape.window="open = false"

    x-on:{{ $openEvent }}.window="open = true"
    x-on:close-drawer.window="open = false"
>
    @if($showButton)
        <button
            type="submit"
            class="btn"
            @click="open = true">
            {{ $event }}
        </button>
    @endif

    <div
        x-show="open"
        x-transition.opacity.duration.150ms
        @click.self="open = false"
        class="fixed inset-0 z-40 bg-black/50 backdrop-blur-sm"
        style="display:none;"
    >
        <div
            @click.stop
            class="absolute top-0 right-0 h-full w-full lg:w-[30vw]
                   bg-[#Ffffff] text-white shadow-2xl
                   px-6 pt-16 pb-6 overflow-y-auto">

            <button
                class="absolute top-4 right-4 text-3xl cursor-pointer"
                @click="open = false">
                ×
            </button>

            {{ $slot }}

        </div>
    </div>
</div>
