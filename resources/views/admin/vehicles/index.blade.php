@extends('layouts.admin')
@section('content')

<div class="flex items-center justify-between bg-white mx-8 my-8 px-4 py-4 shadow rounded-lg">
      
        <div class="bg-gray-700 rounded-md px-4 py-3">
          <!-- Heroicon name: outline/users -->
         <svg class="h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M 23.5 7 c 0.276 0 0.5 0.224 0.5 0.5 v 0.511 c 0 0.793 -0.926 0.989 -1.616 0.989 l -1.086 -2 h 2.202 Z m -1.441 3.506 c 0.639 1.186 0.946 2.252 0.946 3.666 c 0 1.37 -0.397 2.533 -1.005 3.981 v 1.847 c 0 0.552 -0.448 1 -1 1 h -1.5 c -0.552 0 -1 -0.448 -1 -1 v -1 h -13 v 1 c 0 0.552 -0.448 1 -1 1 h -1.5 c -0.552 0 -1 -0.448 -1 -1 v -1.847 c -0.608 -1.448 -1.005 -2.611 -1.005 -3.981 c 0 -1.414 0.307 -2.48 0.946 -3.666 c 0.829 -1.537 1.851 -3.453 2.93 -5.252 c 0.828 -1.382 1.262 -1.707 2.278 -1.889 c 1.532 -0.275 2.918 -0.365 4.851 -0.365 s 3.319 0.09 4.851 0.365 c 1.016 0.182 1.45 0.507 2.278 1.889 c 1.079 1.799 2.101 3.715 2.93 5.252 Z m -16.059 2.994 c 0 -0.828 -0.672 -1.5 -1.5 -1.5 s -1.5 0.672 -1.5 1.5 s 0.672 1.5 1.5 1.5 s 1.5 -0.672 1.5 -1.5 Z m 10 1 c 0 -0.276 -0.224 -0.5 -0.5 -0.5 h -7 c -0.276 0 -0.5 0.224 -0.5 0.5 s 0.224 0.5 0.5 0.5 h 7 c 0.276 0 0.5 -0.224 0.5 -0.5 Z m 2.941 -5.527 s -0.74 -1.826 -1.631 -3.142 c -0.202 -0.298 -0.515 -0.502 -0.869 -0.566 c -1.511 -0.272 -2.835 -0.359 -4.441 -0.359 s -2.93 0.087 -4.441 0.359 c -0.354 0.063 -0.667 0.267 -0.869 0.566 c -0.891 1.315 -1.631 3.142 -1.631 3.142 c 1.64 0.313 4.309 0.497 6.941 0.497 s 5.301 -0.184 6.941 -0.497 Z m 2.059 4.527 c 0 -0.828 -0.672 -1.5 -1.5 -1.5 s -1.5 0.672 -1.5 1.5 s 0.672 1.5 1.5 1.5 s 1.5 -0.672 1.5 -1.5 Z m -18.298 -6.5 h -2.202 c -0.276 0 -0.5 0.224 -0.5 0.5 v 0.511 c 0 0.793 0.926 0.989 1.616 0.989 l 1.086 -2 Z" />
            </svg>
        </div>
        <div class="relative border border-gray-300 rounded-md px-4 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
		  <label for="search_vehicle" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Registarski broj</label>
		  <input type="search" name="search_vehicle" id="search_vehicle" class="search_vehicle block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Pretraga Vozila">
		</div>
        
     
    </div>
<div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-xl font-semibold text-gray-900">Vozni park</h1>
      <p class="mt-2 text-sm text-gray-700">Lista svih vozila.</p>
    </div>
    <div 
        @if(count($errors->create_vehicle) > 0)
        x-data="{open: true}"
        @endif 
        x-data="{open: false}" class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
        <button @click="open = true" type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-gray-700 px-4 py-2 text-sm font-medium text-yellow-400 shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 sm:w-auto">Dodaj vozilo</button>
      
      
      @include('admin.vehicles.modals.create')
    </div>
  </div>
  <div x-data="{open: false}">
    <div class="searchVehicle -mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
    @include('admin.vehicles.search')
  
    </div>
    @include('admin.vehicles.modals.deleteVehicle')
  </div>
  
</div>
<input type="hidden" name="hidden_page" id="hidden_page" value="1"/>

@endsection