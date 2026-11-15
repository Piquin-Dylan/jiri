<x-layout.app>

    <x-onboarding.nav_onboarding></x-onboarding.nav_onboarding>
    <div class="flex justify-between m-8">
        <x-onboarding.step_item number="1" content="Préparation du Jiri" />
        <x-onboarding.step_item number="2" content="Evaluation" active/>
        <x-onboarding.step_item number="3" content="Délibération"/>
    </div>
    <x-onboarding.content></x-onboarding.content>
    <div class="flex items-center justify-between gap-4 p-6">
        <a
            wire:navigate
            href="{{route('accueil')}}"
            type="button"
            class="cursor-pointer inline-flex items-center justify-center gap-3 rounded-xl border border-slate-200 bg-white px-8 py-4 text-lg font-semibold text-[#4a5a87] transition hover:bg-slate-50 focus:outline-none focus:ring-2 focus:ring-[#4a5a87] focus:ring-offset-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor"
                 stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 12H5m6-6-6 6 6 6"/>
            </svg>
            Précédent
        </a>
        <p class="text-2xl font-normal text-slate-500">
            Étape 2 sur 3
        </p>
        <a
            href="{{route('onboarding-3')}}"
            wire:navigate
            type="button"
            class=" cursor-pointer inline-flex items-center justify-center gap-3 rounded-xl bg-[#4a5a87] px-8 py-4 text-lg font-semibold text-white transition hover:bg-[#3f4e78] focus:outline-none focus:ring-2 focus:ring-[#4a5a87] focus:ring-offset-2">
            Suivant
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor"
                 stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/>
            </svg>
        </a>
    </div>

</x-layout.app>
