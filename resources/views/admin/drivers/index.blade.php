@extends('layouts.admin')
@section('content')

<div class="flex items-center justify-between bg-white mx-2 my-3 lg:mx-8 lg:my-8 px-4 py-4 shadow rounded-lg">
      
        <div class="bg-gray-700 rounded-md px-4 py-3">
          <!-- Heroicon name: outline/users -->
         <svg class="flex-shrink-0 h-6 w-6 text-yellow-400" stroke-width="2" stroke="currentColor" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
            <path d="M446.836 353.745a111.71 111.71 0 1 0 0-223.418 111.71 111.71 0 0 0 0 223.418zm0 74.473c102.829 0 186.182-83.353 186.182-186.182S549.665 55.855 446.836 55.855s-186.181 83.353-186.181 186.181 83.353 186.182 186.181 186.182zm-305.43 153.488A148.945 148.945 0 0 1 286.72 465.455h320.233a148.945 148.945 0 0 1 145.315 116.251l57.623 256.112H633.018v-74.473H716.8l-37.2-165.292a74.473 74.473 0 0 0-72.647-58.126H286.72a74.473 74.473 0 0 0-72.648 58.126l-37.2 165.292h102.4v74.473H83.783l57.623-256.112z" fill="currentColor"/>
            <path d="M446.836 949.527a148.945 148.945 0 1 0 0-297.89 148.945 148.945 0 0 0 0 297.89zm0 74.473c123.383 0 223.419-100.035 223.419-223.418S570.219 577.164 446.836 577.164 223.418 677.199 223.418 800.582 323.454 1024 446.836 1024z" fill="currentColor"/>
            </svg>
        </div>
        <div class="relative border border-gray-300 rounded-md px-4 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
		  <label for="search_driver" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Ime-Prezime-Br.Dozvole</label>
		  <input type="search" name="search_driver" id="search_driver" class="search_driver block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Pretraga Vozača">
		</div>
        
     
    </div>
<div class="px-4 sm:px-6 lg:px-8">
  <div class="flex justify-between items-center">
    <div class="sm:flex-auto">
      <h1 class="text-xl font-semibold text-gray-900">Vozači</h1>
      <p class="mt-2 text-sm text-gray-700">Lista svih vozača.</p>
    </div>
    <div 
        @if(count($errors->create_driver) > 0 or count($errors->create_driver_categories) > 0)
        x-data="{open: true}"
        @endif 
        x-data="{open: false}" class="">
        <button @click="open = true" type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-gray-700 px-4 py-2 text-sm font-medium text-yellow-400 shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 sm:w-auto">Dodaj vozača<span class="ml-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
        </svg>
      </span></button>
      
      
      @include('admin.drivers.modals.create')
    </div>
  </div>
  <div x-data="{open: false}" class="relative">
    <div  class="searchDriver -mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
    @include('admin.drivers.search')
  </div>
    @include('admin.drivers.modals.deleteDriver')
  </div>
  
</div>
<input type="hidden" name="hidden_page" id="hidden_page" value="1"/>

@endsection