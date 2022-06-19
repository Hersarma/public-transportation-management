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
            <a href="#" class="text-indigo-600 hover:text-indigo-900">Prikaži</a>
          </td>
        </tr>
@endforeach
@if($vehicles->isEmpty())
  <tr>
    <td colspan="5" class="text-center py-8">Nema rezultata</td>
  </tr>
@endif