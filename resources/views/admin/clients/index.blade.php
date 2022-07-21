@extends('layouts.admin')
@section('content')
<div class="flex items-center justify-between bg-white mx-2 my-3 lg:mx-8 lg:my-8 px-4 py-4 shadow rounded-lg">
  
  <div class="bg-gray-700 rounded-md px-4 py-3">
    <!-- Heroicon name: outline/users -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
    </svg>
  </div>
  <div class="relative border border-gray-300 rounded-md px-4 py-2 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
    <label for="search_client" class="absolute -top-2 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Ime-Prezime</label>
    <input type="search" name="search_client" id="search_client" class="search_client block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Pretraga Klijenata">
    <p id="url_name" class="hidden">{{ Request::path() }}</p>
  </div>
  
  
</div>
<div class="px-4 sm:px-6 lg:px-8">
  <div class="flex items-center justify-between">
    <div class="sm:flex-auto">
      <h1 class="text-xl font-semibold text-gray-900">Klijenti</h1>
      <p class="mt-2 text-sm text-gray-700">Lista svih klijenata.</p>
    </div>
    <div
      @if(count($errors->create_client) > 0)
      x-data="{open: true}"
      @endif
      x-data="{open: false}" class="">
      <button @click="open = true" type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-gray-700 px-4 py-2 text-sm font-medium text-yellow-400 shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 sm:w-auto">Dodaj klijenta<span class="ml-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
        </svg>
      </span></button>
      
      
      @include('admin.clients.modals.create')
    </div>
  </div>
  <div x-data="{open: false}">
    <div class="searchClient -mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
      @include('admin.clients.searchClient')
      
    </div>
    @include('admin.clients.modals.deleteClient')
  </div>
  
</div>
<input type="hidden" name="hidden_page" id="hidden_page" value="1"/>
@endsection