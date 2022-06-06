
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
        <nav class="mt-5 flex-shrink-0 h-full divide-y divide-cyan-800 overflow-y-auto" aria-label="Sidebar">
          <div class="px-2 space-y-1">
            <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/clock -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              Vozni Park
            </a>

            <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/scale -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
              </svg>
              Balances
            </a>

            <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/credit-card -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
              </svg>
              Cards
            </a>

            <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-base font-medium rounded-md">

              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
              Recipients
            </a>

            <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/document-report -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
              Reports
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
                Settings
              </a>

              <a href="#" class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-white hover:text-white hover:bg-gray-800">
                <!-- Heroicon name: outline/question-mark-circle -->
                <svg class="mr-4 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Help
              </a>

              <a href="#" class="group flex items-center px-2 py-2 text-base font-medium rounded-md text-white hover:text-white hover:bg-gray-800">
                <!-- Heroicon name: outline/shield-check -->
                <svg class="mr-4 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
                Privacy
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
      <nav class="mt-5 flex-1 flex flex-col divide-y divide-cyan-800 overflow-y-auto" aria-label="Sidebar">
        <div class="px-2 space-y-1">
          <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md">
            
           
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M 23.5 7 c 0.276 0 0.5 0.224 0.5 0.5 v 0.511 c 0 0.793 -0.926 0.989 -1.616 0.989 l -1.086 -2 h 2.202 Z m -1.441 3.506 c 0.639 1.186 0.946 2.252 0.946 3.666 c 0 1.37 -0.397 2.533 -1.005 3.981 v 1.847 c 0 0.552 -0.448 1 -1 1 h -1.5 c -0.552 0 -1 -0.448 -1 -1 v -1 h -13 v 1 c 0 0.552 -0.448 1 -1 1 h -1.5 c -0.552 0 -1 -0.448 -1 -1 v -1.847 c -0.608 -1.448 -1.005 -2.611 -1.005 -3.981 c 0 -1.414 0.307 -2.48 0.946 -3.666 c 0.829 -1.537 1.851 -3.453 2.93 -5.252 c 0.828 -1.382 1.262 -1.707 2.278 -1.889 c 1.532 -0.275 2.918 -0.365 4.851 -0.365 s 3.319 0.09 4.851 0.365 c 1.016 0.182 1.45 0.507 2.278 1.889 c 1.079 1.799 2.101 3.715 2.93 5.252 Z m -16.059 2.994 c 0 -0.828 -0.672 -1.5 -1.5 -1.5 s -1.5 0.672 -1.5 1.5 s 0.672 1.5 1.5 1.5 s 1.5 -0.672 1.5 -1.5 Z m 10 1 c 0 -0.276 -0.224 -0.5 -0.5 -0.5 h -7 c -0.276 0 -0.5 0.224 -0.5 0.5 s 0.224 0.5 0.5 0.5 h 7 c 0.276 0 0.5 -0.224 0.5 -0.5 Z m 2.941 -5.527 s -0.74 -1.826 -1.631 -3.142 c -0.202 -0.298 -0.515 -0.502 -0.869 -0.566 c -1.511 -0.272 -2.835 -0.359 -4.441 -0.359 s -2.93 0.087 -4.441 0.359 c -0.354 0.063 -0.667 0.267 -0.869 0.566 c -0.891 1.315 -1.631 3.142 -1.631 3.142 c 1.64 0.313 4.309 0.497 6.941 0.497 s 5.301 -0.184 6.941 -0.497 Z m 2.059 4.527 c 0 -0.828 -0.672 -1.5 -1.5 -1.5 s -1.5 0.672 -1.5 1.5 s 0.672 1.5 1.5 1.5 s 1.5 -0.672 1.5 -1.5 Z m -18.298 -6.5 h -2.202 c -0.276 0 -0.5 0.224 -0.5 0.5 v 0.511 c 0 0.793 0.926 0.989 1.616 0.989 l 1.086 -2 Z" />
            </svg>
            Vozni Park
          </a>

          <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md">
           
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.121 15.536c-1.171 1.952-3.07 1.952-4.242 0-1.172-1.953-1.172-5.119 0-7.072 1.171-1.952 3.07-1.952 4.242 0M8 10.5h4m-4 3h4m9-1.5a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              
            Balances
          </a>

          <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md">
            <!-- Heroicon name: outline/credit-card -->
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
            Cards
          </a>

          <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md">
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Recipients
          </a>

          <a href="#" class="text-white hover:text-white hover:bg-gray-800 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md">
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            Reports
          </a>
        </div>
        <div class="mt-6 pt-6">
          <div class="px-2 space-y-1">
            <a href="#" class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md text-white hover:text-white hover:bg-gray-800">
              <svg class="mr-4 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              Settings
            </a>

            <a href="#" class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md text-white hover:text-white hover:bg-gray-800">
              <svg class="mr-4 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              Help
            </a>

            <a href="#" class="group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md text-white hover:text-white hover:bg-gray-800">
              <svg class="mr-4 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
              Privacy
            </a>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
