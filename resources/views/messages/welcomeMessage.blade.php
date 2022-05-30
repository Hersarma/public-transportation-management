@if(session('loginMessage'))
<div
  x-data="{ open: false }"
  x-show="open"
  x-init="$nextTick(() => { open = true }, setTimeout(() => open = false, 2000))"

        x-transition:enter="transition ease-in duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
  class="z-50 absolute top-8 left-1/2 transform -translate-x-1/2 -translate-y-1/2 inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-lg text-white bg-cyan-600">
  <div class="flex">
      <p class="px-4">{{ session('loginMessage') }}</p>
    </p>
  </div>
</div>
@endif