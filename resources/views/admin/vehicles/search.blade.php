<table class="min-w-full divide-y divide-gray-300">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:hidden">Podaci</th>
          <th scope="col" class="hidden py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:table-cell">Proizvođač</th>
          <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Model</th>
          <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">Registarska oznaka</th>
          <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Vozač</th>
          <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
            <span class="sr-only">Prikaži</span>
          </th>
          <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
            <span class="sr-only">Izbriši</span>
          </th>
        </tr>
      </thead>
      <tbody class="searchVehicle divide-y divide-gray-200 bg-white">
        
        @foreach($vehicles as $vehicle)
        <tr>
          <td class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
            {{ ucfirst($vehicle->vehicleManufacturer) }}
            <dl class="font-normal lg:hidden">
              <dd class="mt-1 truncate text-gray-700">{{ ucfirst($vehicle->vehicleModel) }}</dd>
              <dd class="mt-1 truncate text-gray-500 sm:hidden">{{ strtoupper($vehicle->registrationPlate) }}</dd>
            </dl>
          </td>
          <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">{{ $vehicle->vehicleModel }}</td>
          <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">{{ strtoupper($vehicle->registrationPlate) }}</td>
          <td class="px-3 py-4 text-sm text-gray-500">Member</td>
          <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
            <a href="{{ route('vehicles.show', $vehicle) }}" class="text-indigo-600 hover:text-indigo-900">Prikaži</a>
          </td>
          <td class="py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
              <button @click="open = true" class="get_route text-red-600 hover:text-red-900">Izbriši
              <span class="hidden">{{route('vehicles.destroy', $vehicle)}}</span>
              <em class="hidden">{{ $vehicle->registrationPlate }}</em>
              </button>
              
          </td>
        </tr>
      @endforeach
    @if($vehicles->isEmpty())
    <tr>
    <td colspan="6" class="text-center py-8">Nema rezultata</td>
    </tr>
    @endif
      </tbody>
        
    </table>
  {{ $vehicles->links() }}
