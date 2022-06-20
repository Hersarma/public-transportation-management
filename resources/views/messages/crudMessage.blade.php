@if(session('crudMessage'))
<div x-data="{ show: false }">
  <div x-cloak x-show="show"
    x-init="$nextTick(() => { show = true }, setTimeout(() => show = false, 3000))"
   class="z-50 absolute top-8 left-1/2 transform -translate-x-1/2 -translate-y-1/2 px-6 py-3 bg-gray-800 shadow-lg rounded-lg border border-yellow-400 overflow-hidden"

  x-transition:enter="transition ease-in duration-300"
  x-transition:enter-start="opacity-0 scale-90"
  x-transition:enter-end="opacity-100 scale-100"
  x-transition:leave="transition ease-in duration-300"
  x-transition:leave-start="opacity-100 scale-100"
  x-transition:leave-end="opacity-0 scale-90"
  >
  <div class="flex">
      <p class="text-sm font-medium text-yellow-400">{{ session('crudMessage') }}</p>
    </p>
  </div>
</div>
</div>

@endif