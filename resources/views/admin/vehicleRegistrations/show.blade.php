@extends('layouts.admin')
@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow overflow-hidden sm:rounded-lg lg:mx-8 lg:my-8">
  <div class="px-4 py-6 sm:px-6 flex flex justify-between items-center">
    <h3 class="text-lg leading-6 font-medium text-gray-900">Informacije o registraciji</h3>
    <div
      @if(count($errors->edit_vehicle_registration) > 0)
      x-data="{open: true}"
      @endif
      x-data="{open: false}" class="">
      <button @click="open = true" type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-gray-700 px-4 py-2 text-sm font-medium text-yellow-400 shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 sm:w-auto">Izmeni registraciju<span class="ml-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
          <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
        </svg>
      </span></button>
      
      
      @include('admin.vehicleRegistrations.modals.edit')
    </div>
  </div>
  <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
    <input type="" name="" class="datepicker text-lg w-full">
    <dl class="sm:divide-y sm:divide-gray-200">
     
     <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Vozilo</dt>
        <dl>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$vehicle->vehicleManufacturer }}</dd>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$vehicle->vehicleModel }}</dd>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$vehicle->registrationPlate }}</dd>
        </dl>
        
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Datum registracije</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$vehicleRegistration->purchase_date->format('d-m-Y') }}</dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">Važi do</dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{$vehicleRegistration->expiration_date->format('d-m-Y')}}</dd>
      </div>
      <div x-data="{open: false}">
        <div class="hidden sm:block py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">Cena</dt>
          <dl>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $vehicleRegistration->price }} din.</dd>
            @if(!empty($vehicleRegistration->receipt))
            <dd class="mt-2 text-sm text-gray-900 sm:mt-2 sm:col-span-2">
            <button @click="open = true" type="button" class="-ml-4 inline-flex items-center justify-center rounded-md border border-transparent bg-gray-700 px-4 py-2 text-sm font-medium text-yellow-400 shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 sm:w-auto">Prikaži račun</button>
            </dd>
            @endif
          </dl>
        </div>
        <div class="sm:hidden flex items-center justify-between py-4">
          <div>
            <p class="text-sm font-medium text-gray-500">Cena</p>
            <p class="mt-1 text-sm text-gray-900">{{ $vehicleRegistration->price }} din.</p>
          </div>
          
          @if(!empty($vehicleRegistration->receipt))
          <button @click="open = true" type="button" class="rounded-md border border-transparent bg-gray-700 px-4 py-2 text-sm font-medium text-yellow-400 shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 sm:w-auto">Prikaži račun</button>
          @endif
        </div>
        @include('admin.vehicleRegistrations.modals.receipt')
      </div>
    </dl>
  </div>
</div>
@endsection