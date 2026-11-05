<div x-data="{ open: false }" @keydown.escape.window="open = false">
    <button type="button"
            class="fixed top-4 left-4 z-50 p-2 rounded-md bg-white shadow md:hidden"
            @click="open = !open">
        <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
             aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
        <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M18 6L6 18"/>
        </svg>
    </button>

    <div x-show="open"
         x-cloak
         x-transition.opacity
         @click="open = false"
         class="fixed inset-0 z-30 bg-black/50 md:hidden"></div>

    <aside id="main-navigation"
           class="fixed top-0 left-0 h-full w-64 bg-white z-40 transition-transform duration-300 md:translate-x-0"
           :class="open ? 'translate-x-0' : '-translate-x-full'">
        <h2 class="sr-only">Navigation principale</h2>
        <nav class="h-full flex flex-col items-center justify-center">
            <h3 class="sr-only">Menu de navigation</h3>
            <ul class="flex flex-col gap-6 text-2xl font-semibold text-black w-full px-6"
                @click="open = false">
                <x-navigation.nav name="Accueil" link="dashboard"/>
                <x-navigation.nav name="Jiri" link="jiri"/>
                <x-navigation.nav name="Contacts" link="contact"/>
                <x-navigation.nav name="Projet" link="project"/>
                <x-form.logout/>
            </ul>
        </nav>
    </aside>
</div>
