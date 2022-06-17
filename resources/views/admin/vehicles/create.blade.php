@extends('layouts.admin')
@section('content')
<div class="lg:px-4 px-2">
	<form class="space-y-8 divide-y divide-gray-200">
  <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
    
    <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
      <div>
        <h3 class="text-lg leading-6 font-medium text-gray-900">Novo Vozilo</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">Podaci sa saobraćajne dozvole.</p>
      </div>
      <div class="space-y-6 sm:space-y-5">
        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> First name </label>
          <div class="mt-1 sm:mt-0 sm:col-span-2">
            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="last-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Last name </label>
          <div class="mt-1 sm:mt-0 sm:col-span-2">
            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Email address </label>
          <div class="mt-1 sm:mt-0 sm:col-span-2">
            <input id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="country" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Country </label>
          @include('components.datepicker')
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="street-address" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Street address </label>
          <div class="mt-1 sm:mt-0 sm:col-span-2">
            <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="city" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> City </label>
          <div class="mt-1 sm:mt-0 sm:col-span-2">
            <input type="text" name="city" id="city" autocomplete="address-level2" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="region" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> State / Province </label>
          <div class="mt-1 sm:mt-0 sm:col-span-2">
            <input type="text" name="region" id="region" autocomplete="address-level1" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
          </div>
        </div>

        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
          <label for="postal-code" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> ZIP / Postal code </label>
          @include('components.datepicker')
        </div>
      </div>
    </div>

  </div>

  <div class="pt-5">
    <div class="flex justify-end">
      <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-gray-700 px-4 py-2 text-sm font-medium text-yellow-400 shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 sm:w-auto">Sačuvaj</button>
    </div>
  </div>
</form>

</div>
@push('scripts')
    <script src="/js/datepicker.js"></script>
@endpush
@endsection