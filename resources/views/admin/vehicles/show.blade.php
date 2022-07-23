@extends('layouts.admin')
@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg lg:mx-8 lg:my-8">
  <div class="px-4 py-6 sm:px-6 flex flex justify-between items-center">
    <h3 class="text-lg leading-6 font-medium text-gray-900">Informacije o vozilu</h3>
    <div
      @if(count($errors->edit_vehicle) > 0)
      x-data="{open: true}"
      @endif
      x-data="{open: false}" class="">
      <button @click="open = true" type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-gray-700 px-4 py-2 text-sm font-medium text-yellow-400 shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 sm:w-auto">Izmeni vozilo<span class="ml-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
          <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
        </svg>
      </span></button>
      
      
      @include('admin.vehicles.modals.edit')
    </div>
  </div>
  <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
    <dl class="sm:divide-y sm:divide-gray-200">
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Registrovan do</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">21-10-2022 - Ističe za 254 dana.</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Vinjeta važi do</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">21-10-2022 - Ističe za 6 dana.</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Mali servis rađen na</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">367820 km - Sledeći servis na 368820 km.</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Veliki servis rađen na</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">367820 km - Sledeći servis na 467820 km.</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Kilometraža</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->currentMileage }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Registracija</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$vehicle->registrationPlate}}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Prva registarcija</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$vehicle->firstRegistrationDate->format('d-m-Y') }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Datum izdavanja saobraćajne dozvole</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$vehicle->trafficLicenseIssuedDate->format('d-m-Y')}}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Prezime-Ime vlasnika</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->lname }} {{ $vehicle->fname }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Prebivalište</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->residenceAddress }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Marka vozila</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->vehicleManufacturer }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Model vozila</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->vehicleModel }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Godište</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->year }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Broj Šasije</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->chassisNumber }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Kubikaža</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->cylinderCapacity }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Kilovati</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->horsepower }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Vrsta Goriva</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicle->fuleType }}</dd>
      </div>
      <div class="py-4 sm:grid sm:py-5 sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Dokumentacija</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        <ul role="list" class="border border-gray-200 rounded-md divide-y divide-gray-200">
          <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
            <div class="w-0 flex-1 flex items-center">
              <!-- Heroicon name: solid/paper-clip -->
              <span class="bg-gray-700 px-2 py-2 rounded-md mr-4"><i class="fa-solid fa-road fa-lg text-yellow-400"></i></span>
              <p class="ml-2 flex-1 w-0 truncate"> Vinjeta </p>
            </div>
            <div class="ml-4 flex-shrink-0 flex space-x-4">
              <button type="button" class="bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none">Izmeni</button>
              <span class="text-gray-300" aria-hidden="true">|</span>
              <button type="button" class="bg-white rounded-md font-medium text-red-600 hover:text-red-500 focus:outline-none">Izbriši</button>
            </div>
          </li>
          <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
            <div class="w-0 flex-1 flex items-center">
              <!-- Heroicon name: solid/paper-clip -->
              <span class="bg-gray-700 px-2 py-2 rounded-md mr-4"><i class="fa-solid fa-registered fa-lg text-yellow-400"></i></span>
              <p class="ml-2 flex-1 w-0 truncate"> Registracija </p>
            </div>
            <div class="ml-4 flex-shrink-0 flex space-x-4">
              <button type="button" class="bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none">Izmeni</button>
              <span class="text-gray-300" aria-hidden="true">|</span>
              <button type="button" class="bg-white rounded-md font-medium text-red-600 hover:text-red-500 focus:outline-none">Izbriši</button>
            </div>
          </li>
        </ul>
        </dd>
      </div>
    </dl>
  </div>
</div>
@endsection