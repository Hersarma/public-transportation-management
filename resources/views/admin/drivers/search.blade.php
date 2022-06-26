<table class="min-w-full divide-y divide-gray-300">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:hidden">Podaci</th>
          <th scope="col" class="hidden py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:table-cell">Ime</th>
          <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Prezime</th>
          <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">Broj Dozvole</th>
          <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Vozilo</th>
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
          <td class="px-3 py-4 text-sm text-gray-500">Member</td>
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
    {{ $drivers->links() }}

