<div x-data="{ highlightedButton: 'evaluators' }" class="flex justify-center pt-6 mb-6 gap-4">
    <span @click="highlightedButton = 'evaluators'"
          :class="highlightedButton === 'evaluators' ? 'bg-[#385A87] text-white' : 'bg-white text-[#385A87]'"
          class="cursor-pointer p-4 rounded-2xl text-xl font-bold"
          wire:click="$set('filter', 'evaluators')">Evaluators</span>

    <span @click="highlightedButton = 'evaluated'"
          :class="highlightedButton === 'evaluated' ? 'bg-[#385A87] text-white' : 'bg-white text-[#385A87]'"
          class="cursor-pointer p-4 rounded-2xl text-xl font-bold"
          wire:click="$set('filter', 'evaluated')">Students</span>
</div>
