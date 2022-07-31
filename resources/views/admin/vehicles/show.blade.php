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
        @if($vehicleRegistration)
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicleRegistration->expiration_date->format('d-m-Y') }} - Ističe za {{ now()->diffInDays($vehicleRegistration->expiration_date) }} dana.</dd>
        @else
         <dd class="mt-1 text-sm text-red-500 sm:mt-0 sm:col-span-2">
         <div class="flex items-center">
           <a href="{{ route('vehicleRegistrations.index') }}">Vozilo nije registrovano.</a href="">
           <p class="pl-2"><svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
          </p>
         </div>
         </dd>
        @endif
       
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Vinjeta važi do</dt>
        <div>
          @foreach($vignettes as $vignette)
          <dd class="mt-1 mb-2 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ ucfirst($vignette->country) }} - {{ $vignette->expiration_date->format('d-m-Y') }} - Ističe za {{ now()->diffInDays($vignette->expiration_date) }} dana.</dd>
          @endforeach
        </div>
        
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
    </dl>
  </div>
</div>
@endsection