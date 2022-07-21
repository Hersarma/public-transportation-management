<table class="min-w-full divide-y divide-gray-300 mb-10 lg:mb-0">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:hidden">Podaci</th>
          <th scope="col" class="hidden py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:table-cell">Vozilo</th>
          <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Registarcija</th>
          <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">Datum registracije</th>
          <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Važi do</th>
          <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 sm:table-cell">Cena</th>
          <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
            <span class="sr-only">Prikaži</span>
          </th>
          <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
            <span class="sr-only">Izbriši</span>
          </th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 bg-white">
        
        @foreach($vehicleRegistrations as $vehicleRegistration)
        <tr>
          <td class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
            {{ $vehicleRegistration->vehicle->vehicleManufacturer }} {{ $vehicleRegistration->vehicle->vehicleModel }} 
            
            
            <dl class="font-normal lg:hidden">
              <dd class="mt-1 truncate text-gray-500">{{ $vehicleRegistration->vehicle->registrationPlate }}</dd>
              <dd class="mt-1 truncate text-gray-700">{{ ucfirst($vehicleRegistration->country) }}</dd>
            </dl>
          </td>
          <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">{{ $vehicleRegistration->vehicle->registrationPlate }}</td>
          <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">{{ $vehicleRegistration->purchase_date->format('d-m-Y') }}</td>
          <td class="px-3 py-4 text-sm text-gray-500">{{ $vehicleRegistration->expirationDate->format('d-m-Y') }}</td>
          <td class="px-3 py-4 text-sm text-gray-500 sm:table-cell">{{ $vehicleRegistration->price }} din.</td>
          <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
            <a href="{{ route('vehicleRegistrations.show', $vehicleRegistration) }}" class="text-indigo-600 hover:text-indigo-900">Prikaži</a>
          </td>
          <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
              <button @click="open = true" class="get_route text-red-600 hover:text-red-900">Izbriši
              <span class="hidden">{{route('vehicleRegistrations.destroy', $vehicleRegistration)}}</span>
              <em class="hidden">
                {{ $vehicleRegistration->vehicle->registrationPlate }}</em>
              </button>
              
          </td>
        </tr>
      @endforeach
    @if($vehicleRegistrations->isEmpty())
    <tr>
    <td colspan="7" class="text-center py-8">Nema rezultata</td>
    </tr>
    @endif
      </tbody>
        
    </table>
    <div class="hidden md:block">
          {{ $vehicleRegistrations->links() }}
    </div>
    <div class="lg:hidden fixed bottom-0 w-full bg-gray-100">
          {{ $vehicleRegistrations->links() }}
    </div>
  
