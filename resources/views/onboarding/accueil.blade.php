<x-layout.app>

    <x-onboarding.nav_onboarding></x-onboarding.nav_onboarding>
    <div class="flex justify-between m-8">
        <x-onboarding.step_item number="1" content="Préparation du Jiri" active />
        <x-onboarding.step_item number="2" content="Evaluation" />
        <x-onboarding.step_item number="3" content="Délibération" />
    </div>
    <x-onboarding.content></x-onboarding.content>
    <div class="flex items-center justify-between gap-4 p-6">
        <p class="text-2xl font-normal text-slate-500">
            Étape 1 sur 3
        </p>
        <a
            wire:navigate
            href="{{route('onboarding-2')}}"
            type="button"
            class=" cursor-pointer inline-flex items-center justify-center gap-3 rounded-xl bg-[#4a5a87] px-8 py-4 text-lg font-semibold text-white transition hover:bg-[#3f4e78] focus:outline-none focus:ring-2 focus:ring-[#4a5a87] focus:ring-offset-2">
            Suivant
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                 stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6"/>
            </svg>
        </a>
    </div>

</x-layout.app>
