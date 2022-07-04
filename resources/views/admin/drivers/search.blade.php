<table class="min-w-full divide-y divide-gray-300 mb-10 lg:mb-0">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:hidden">Podaci</th>
          <th scope="col" class="hidden py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:table-cell">Ime</th>
          <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Prezime</th>
          <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">Broj Dozvole</th>
          <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Kontakt</th>
          <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
            <span class="sr-only">Prikaži</span>
          </th>
          <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
            <span class="sr-only">Izbriši</span>
          </th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 bg-white">
       @foreach($drivers as $driver)
        <tr>
          <td class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
            {{ ucfirst($driver->fname) }}
            <dl class="font-normal lg:hidden">
              <dd class="mt-1 truncate text-gray-700">{{ ucfirst($driver->lname) }}</dd>
              <dd class="mt-1 truncate text-gray-500 sm:hidden">{{ strtoupper($driver->driverLicenseId) }}</dd>
            </dl>
          </td>
          <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">{{ $driver->lname }}</td>
          <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">{{ strtoupper($driver->driverLicenseId) }}</td>
          <td x-data="{ open: false }" @click="open =! open" class="px-3 py-4 text-sm text-gray-500 cursor-pointer focus:outline-none"><span class="flex items-center">
                    
                Izaberi<svg class="h-5 lg:ml-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg></span>
                <div x-cloak x-show="open" 
                x-transition:enter="transition ease-in duration-300"
                x-transition:enter-start="opacity-0 scale-90"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90"
                @click.away="open = false" class="absolute mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <a href="tel:{{ $driver->contact }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-1"><i class="fa-solid fa-mobile-screen-button fa-2x text-gray-500 mr-4"></i>Pozovi</a>
              <a href="whatsapp://{{ $driver->contact }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-0"><i class="fa-brands fa-whatsapp fa-2x text-green-500 mr-4"></i>Pozovi</a>

              <a href="viber://chat?number={{ $driver->contact }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-1"><i class="fa-brands fa-viber fa-2x text-purple-500 mr-4"></i>Pozovi</a>
            </div>
              </td>
          <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
            <a href="{{ route('drivers.show', $driver) }}" class="text-indigo-600 hover:text-indigo-900">Prikaži</a>
          </td>
          <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
              <button @click="open = true" class="get_route text-red-600 hover:text-red-900">Izbriši
              <span class="hidden">{{route('drivers.destroy', $driver)}}</span>
              <em class="hidden">{{ $driver->fname }}  {{ $driver->lname }}</em>
              </button>
              
          </td>
        </tr>
        @endforeach
        @if($drivers->isEmpty())
        <tr>
          <td colspan="6" class="text-center py-8">Nema rezultata</td>
        </tr>
        @endif
      </tbody>
        
    </table>
    <div class="hidden md:block">
          {{ $drivers->links() }}
    </div>
    <div class="lg:hidden fixed bottom-0 w-full bg-gray-100">
          {{ $drivers->links() }}
    </div>


