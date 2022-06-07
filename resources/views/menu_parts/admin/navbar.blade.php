<div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-gray-700">
      <button @click="open =! open" type="button" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
        <span class="sr-only">Open sidebar</span>
        <!-- Heroicon name: outline/menu-alt-2 -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
      </button>
      <div class="flex-1 px-8 flex justify-between">
        <div class="flex-1 flex">
          <div class="w-full flex md:ml-0">
             <a href="{{ route('homeAdmin') }}" class="mr-4 text-white group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md {{ Request::is('admin') ? 'underline underline-offset-8 decoration-yellow-400' : '' }}" aria-current="page">
            
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Početna
          </a>
          <a href="{{ route('homeDrivers') }}" class="text-white flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md" aria-current="page">
            Za Vozače
          </a>
          </div>
        </div>
        <div class="ml-4 flex items-center md:ml-6">
          <button type="button" class="p-1 rounded-full text-white hover:text-gray-200">
            <span class="sr-only">View notifications</span>
            <!-- Heroicon name: outline/bell -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </button>

          <!-- Profile dropdown -->
          <div x-data="{ open: false }" class="ml-3 relative">
            <div>
              <button @click="open =! open" type="button" class="max-w-xs rounded-full flex items-center text-sm lg:p-2" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <img class="h-8 w-8 rounded-full" src="img/user.jpg" alt="">
                <span class="hidden ml-3 text-white text-sm font-medium lg:block"><span class="sr-only">Open user menu for </span>{{ auth()->user()->name }}</span>
                <!-- Heroicon name: solid/chevron-down -->
                <svg class="hidden flex-shrink-0 ml-1 h-5 w-5 text-white lg:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </button>
            </div>
            <div x-show="open" 
            x-transition:enter="transition ease-in duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Vaš Profil</a>

              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Podešavanja</a>

              <a onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Izlogujte se</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
