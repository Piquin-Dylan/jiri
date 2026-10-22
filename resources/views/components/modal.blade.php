<div
    x-data="{ open: false }"
    x-on:open-modal.window="open = true"
    x-on:close-modal.window="open = false"
    x-on:keydown.escape.window="open = false">
    {{ $empty_content }}

    <div
        x-show="open"
        x-transition.opacity
        x-on:click.self="open = false"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4">
        <div class="modal relative">
            <button
                type="button"
                x-on:click="open = false"
                class="absolute top-3 right-3 text-2xl cursor-pointer">X
            </button>

            {{ $slot }}
        </div>
    </div>
</div>
