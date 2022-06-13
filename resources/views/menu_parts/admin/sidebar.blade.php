
<div>
 
  <div x-show="open" class="relative z-40 md:hidden" role="dialog" aria-modal="true">
   
    <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

    <div class="fixed inset-0 flex z-40">
     
      <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-gradient-to-b from-gray-700 to-gray-600">
       
        <div class="absolute top-0 right-0 -mr-12 pt-2">
          <button @click="open =! open" type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
            <span class="sr-only">Close sidebar</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="flex-shrink-0 flex items-center px-4">
         <img class="h-14 w-auto" src="img/applogo.png" alt="logo">
        <p class="ml-4 text-lg leading-6 font-medium text-white">Admin</p>
        </div>
        <nav class="mt-5 flex-shrink-0 h-full divide-y divide-yellow-400 overflow-y-auto" aria-label="Sidebar">
          <div class="px-2 space-y-1">
            <a href="{{ route('vehicles.index') }}" class="{{ Request::is('vehicles') ? 'bg-gray-800' : '' }} text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/clock -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M 23.5 7 c 0.276 0 0.5 0.224 0.5 0.5 v 0.511 c 0 0.793 -0.926 0.989 -1.616 0.989 l -1.086 -2 h 2.202 Z m -1.441 3.506 c 0.639 1.186 0.946 2.252 0.946 3.666 c 0 1.37 -0.397 2.533 -1.005 3.981 v 1.847 c 0 0.552 -0.448 1 -1 1 h -1.5 c -0.552 0 -1 -0.448 -1 -1 v -1 h -13 v 1 c 0 0.552 -0.448 1 -1 1 h -1.5 c -0.552 0 -1 -0.448 -1 -1 v -1.847 c -0.608 -1.448 -1.005 -2.611 -1.005 -3.981 c 0 -1.414 0.307 -2.48 0.946 -3.666 c 0.829 -1.537 1.851 -3.453 2.93 -5.252 c 0.828 -1.382 1.262 -1.707 2.278 -1.889 c 1.532 -0.275 2.918 -0.365 4.851 -0.365 s 3.319 0.09 4.851 0.365 c 1.016 0.182 1.45 0.507 2.278 1.889 c 1.079 1.799 2.101 3.715 2.93 5.252 Z m -16.059 2.994 c 0 -0.828 -0.672 -1.5 -1.5 -1.5 s -1.5 0.672 -1.5 1.5 s 0.672 1.5 1.5 1.5 s 1.5 -0.672 1.5 -1.5 Z m 10 1 c 0 -0.276 -0.224 -0.5 -0.5 -0.5 h -7 c -0.276 0 -0.5 0.224 -0.5 0.5 s 0.224 0.5 0.5 0.5 h 7 c 0.276 0 0.5 -0.224 0.5 -0.5 Z m 2.941 -5.527 s -0.74 -1.826 -1.631 -3.142 c -0.202 -0.298 -0.515 -0.502 -0.869 -0.566 c -1.511 -0.272 -2.835 -0.359 -4.441 -0.359 s -2.93 0.087 -4.441 0.359 c -0.354 0.063 -0.667 0.267 -0.869 0.566 c -0.891 1.315 -1.631 3.142 -1.631 3.142 c 1.64 0.313 4.309 0.497 6.941 0.497 s 5.301 -0.184 6.941 -0.497 Z m 2.059 4.527 c 0 -0.828 -0.672 -1.5 -1.5 -1.5 s -1.5 0.672 -1.5 1.5 s 0.672 1.5 1.5 1.5 s 1.5 -0.672 1.5 -1.5 Z m -18.298 -6.5 h -2.202 c -0.276 0 -0.5 0.224 -0.5 0.5 v 0.511 c 0 0.793 0.926 0.989 1.616 0.989 l 1.086 -2 Z" />
            </svg>
              Vozni Park
            </a>

            <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/scale -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" stroke-width="2" stroke="currentColor" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
            <path d="M446.836 353.745a111.71 111.71 0 1 0 0-223.418 111.71 111.71 0 0 0 0 223.418zm0 74.473c102.829 0 186.182-83.353 186.182-186.182S549.665 55.855 446.836 55.855s-186.181 83.353-186.181 186.181 83.353 186.182 186.181 186.182zm-305.43 153.488A148.945 148.945 0 0 1 286.72 465.455h320.233a148.945 148.945 0 0 1 145.315 116.251l57.623 256.112H633.018v-74.473H716.8l-37.2-165.292a74.473 74.473 0 0 0-72.647-58.126H286.72a74.473 74.473 0 0 0-72.648 58.126l-37.2 165.292h102.4v74.473H83.783l57.623-256.112z" fill="currentColor"/>
            <path d="M446.836 949.527a148.945 148.945 0 1 0 0-297.89 148.945 148.945 0 0 0 0 297.89zm0 74.473c123.383 0 223.419-100.035 223.419-223.418S570.219 577.164 446.836 577.164 223.418 677.199 223.418 800.582 323.454 1024 446.836 1024z" fill="currentColor"/>
            </svg>
            Vozači
            </a>

            <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/credit-card -->
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
            </svg>
            Klijenti
            </a>

            <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-base font-medium rounded-md">

             <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.736 6.979C9.208 6.193 9.696 6 10 6c.304 0 .792.193 1.264.979a1 1 0 001.715-1.029C12.279 4.784 11.232 4 10 4s-2.279.784-2.979 1.95c-.285.475-.507 1-.67 1.55H6a1 1 0 000 2h.013a9.358 9.358 0 000 1H6a1 1 0 100 2h.351c.163.55.385 1.075.67 1.55C7.721 15.216 8.768 16 10 16s2.279-.784 2.979-1.95a1 1 0 10-1.715-1.029c-.472.786-.96.979-1.264.979-.304 0-.792-.193-1.264-.979a4.265 4.265 0 01-.264-.521H10a1 1 0 100-2H8.017a7.36 7.36 0 010-1H10a1 1 0 100-2H8.472c.08-.185.167-.36.264-.521z" clip-rule="evenodd" />
            </svg>
            Troškovi
            </a>

            <a href="{{ route('gps') }}" class="{{ Request::is('gps') ? 'bg-gray-800' : '' }} text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/document-report -->
              <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
              </svg>
              GPS
            </a>
          </div>
          <div class="mt-6 pt-6">
            <div class="px-2 space-y-1">
              <a href="#" class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-white hover:text-white hover:bg-gray-800">
                <!-- Heroicon name: outline/cog -->
                <svg class="mr-4 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Podešavanja
              </a>

              <a href="#" class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-white hover:text-white hover:bg-gray-800">
                <!-- Heroicon name: outline/question-mark-circle -->
                <svg class="mr-4 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                ??????
              </a>

              <a href="#" class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-white hover:text-white hover:bg-gray-800">
                <!-- Heroicon name: outline/shield-check -->
                <svg class="mr-4 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                ??????
              </a>
            </div>
          </div>
        </nav>
      </div>

      <div class="flex-shrink-0 w-14" aria-hidden="true">
     
      </div>
    </div>
  </div>

 
  <div class="hidden lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0">
   
    <div class="flex flex-col flex-grow bg-gradient-to-b from-gray-700 to-gray-600 pt-2 pb-2 overflow-y-auto">
      <div class="flex items-center flex-shrink-0 px-4">
        <img class="h-14 w-auto" src="img/applogo.png" alt="logo">
        <p class="ml-4 text-lg leading-6 font-medium text-white">Admin</p>
      </div>
      <nav class="mt-5 flex-1 flex flex-col divide-y divide-yellow-400 overflow-y-auto" aria-label="Sidebar">
        <div class="px-2 space-y-1">
          <a href="{{ route('vehicles.index') }}" class="{{ Request::is('vehicles') ? 'bg-gray-800' : '' }} text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md">
            
           
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M 23.5 7 c 0.276 0 0.5 0.224 0.5 0.5 v 0.511 c 0 0.793 -0.926 0.989 -1.616 0.989 l -1.086 -2 h 2.202 Z m -1.441 3.506 c 0.639 1.186 0.946 2.252 0.946 3.666 c 0 1.37 -0.397 2.533 -1.005 3.981 v 1.847 c 0 0.552 -0.448 1 -1 1 h -1.5 c -0.552 0 -1 -0.448 -1 -1 v -1 h -13 v 1 c 0 0.552 -0.448 1 -1 1 h -1.5 c -0.552 0 -1 -0.448 -1 -1 v -1.847 c -0.608 -1.448 -1.005 -2.611 -1.005 -3.981 c 0 -1.414 0.307 -2.48 0.946 -3.666 c 0.829 -1.537 1.851 -3.453 2.93 -5.252 c 0.828 -1.382 1.262 -1.707 2.278 -1.889 c 1.532 -0.275 2.918 -0.365 4.851 -0.365 s 3.319 0.09 4.851 0.365 c 1.016 0.182 1.45 0.507 2.278 1.889 c 1.079 1.799 2.101 3.715 2.93 5.252 Z m -16.059 2.994 c 0 -0.828 -0.672 -1.5 -1.5 -1.5 s -1.5 0.672 -1.5 1.5 s 0.672 1.5 1.5 1.5 s 1.5 -0.672 1.5 -1.5 Z m 10 1 c 0 -0.276 -0.224 -0.5 -0.5 -0.5 h -7 c -0.276 0 -0.5 0.224 -0.5 0.5 s 0.224 0.5 0.5 0.5 h 7 c 0.276 0 0.5 -0.224 0.5 -0.5 Z m 2.941 -5.527 s -0.74 -1.826 -1.631 -3.142 c -0.202 -0.298 -0.515 -0.502 -0.869 -0.566 c -1.511 -0.272 -2.835 -0.359 -4.441 -0.359 s -2.93 0.087 -4.441 0.359 c -0.354 0.063 -0.667 0.267 -0.869 0.566 c -0.891 1.315 -1.631 3.142 -1.631 3.142 c 1.64 0.313 4.309 0.497 6.941 0.497 s 5.301 -0.184 6.941 -0.497 Z m 2.059 4.527 c 0 -0.828 -0.672 -1.5 -1.5 -1.5 s -1.5 0.672 -1.5 1.5 s 0.672 1.5 1.5 1.5 s 1.5 -0.672 1.5 -1.5 Z m -18.298 -6.5 h -2.202 c -0.276 0 -0.5 0.224 -0.5 0.5 v 0.511 c 0 0.793 0.926 0.989 1.616 0.989 l 1.086 -2 Z" />
            </svg>
            Vozni Park
          </a>

          <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md">
           
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" stroke-width="2" stroke="currentColor" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
            <path d="M446.836 353.745a111.71 111.71 0 1 0 0-223.418 111.71 111.71 0 0 0 0 223.418zm0 74.473c102.829 0 186.182-83.353 186.182-186.182S549.665 55.855 446.836 55.855s-186.181 83.353-186.181 186.181 83.353 186.182 186.181 186.182zm-305.43 153.488A148.945 148.945 0 0 1 286.72 465.455h320.233a148.945 148.945 0 0 1 145.315 116.251l57.623 256.112H633.018v-74.473H716.8l-37.2-165.292a74.473 74.473 0 0 0-72.647-58.126H286.72a74.473 74.473 0 0 0-72.648 58.126l-37.2 165.292h102.4v74.473H83.783l57.623-256.112z" fill="currentColor"/>
            <path d="M446.836 949.527a148.945 148.945 0 1 0 0-297.89 148.945 148.945 0 0 0 0 297.89zm0 74.473c123.383 0 223.419-100.035 223.419-223.418S570.219 577.164 446.836 577.164 223.418 677.199 223.418 800.582 323.454 1024 446.836 1024z" fill="currentColor"/>
            </svg>
            Vozači
          </a>

          <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md">
            <!-- Heroicon name: outline/credit-card -->
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
            </svg>
            Klijenti
          </a>

          <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.736 6.979C9.208 6.193 9.696 6 10 6c.304 0 .792.193 1.264.979a1 1 0 001.715-1.029C12.279 4.784 11.232 4 10 4s-2.279.784-2.979 1.95c-.285.475-.507 1-.67 1.55H6a1 1 0 000 2h.013a9.358 9.358 0 000 1H6a1 1 0 100 2h.351c.163.55.385 1.075.67 1.55C7.721 15.216 8.768 16 10 16s2.279-.784 2.979-1.95a1 1 0 10-1.715-1.029c-.472.786-.96.979-1.264.979-.304 0-.792-.193-1.264-.979a4.265 4.265 0 01-.264-.521H10a1 1 0 100-2H8.017a7.36 7.36 0 010-1H10a1 1 0 100-2H8.472c.08-.185.167-.36.264-.521z" clip-rule="evenodd" />
            </svg>
            Troškovi
          </a>

          <a href="{{ route('gps') }}" class="{{ Request::is('gps') ? 'bg-gray-800' : '' }} text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            GPS
          </a>
        </div>
        <div class="mt-6 pt-6">
          <div class="px-2 space-y-1">
            <a href="#" class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md text-white hover:text-white hover:bg-gray-800">
              <svg class="mr-4 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              Podešavanja
            </a>

            <a href="#" class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md text-white hover:text-white hover:bg-gray-800">
              <svg class="mr-4 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              ??????
            </a>

            <a href="#" class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md text-white hover:text-white hover:bg-gray-800">
              <svg class="mr-4 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
              ??????
            </a>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
