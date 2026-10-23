@props(['name'])


<div
    x-data="{ open: false }"
    x-on:open-{{ $name }}.window="open = true"
    x-on:close-{{ $name }}.window="open = false"
    x-on:keydown.escape.window="open = false">
    {{ $empty_content }}

    <div
        x-show="open"
        x-transition.opacity
        x-on:click.self="open = false"
        class="modal-bg">
        <div class="modal">
            <button
                type="button"
                x-on:click="open = false"
                class="close-modal">X
            </button>
            {{ $slot }}
        </div>
    </div>
</div>
