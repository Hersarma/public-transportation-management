@extends('layouts.admin')
@section('content')
<!-- App info -->
<div class="px-4 py-2">
  <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
    <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
      <dt>
        <div class="absolute bg-gray-700 rounded-md p-3">
          <!-- Heroicon name: outline/users -->
         <svg class="h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M 23.5 7 c 0.276 0 0.5 0.224 0.5 0.5 v 0.511 c 0 0.793 -0.926 0.989 -1.616 0.989 l -1.086 -2 h 2.202 Z m -1.441 3.506 c 0.639 1.186 0.946 2.252 0.946 3.666 c 0 1.37 -0.397 2.533 -1.005 3.981 v 1.847 c 0 0.552 -0.448 1 -1 1 h -1.5 c -0.552 0 -1 -0.448 -1 -1 v -1 h -13 v 1 c 0 0.552 -0.448 1 -1 1 h -1.5 c -0.552 0 -1 -0.448 -1 -1 v -1.847 c -0.608 -1.448 -1.005 -2.611 -1.005 -3.981 c 0 -1.414 0.307 -2.48 0.946 -3.666 c 0.829 -1.537 1.851 -3.453 2.93 -5.252 c 0.828 -1.382 1.262 -1.707 2.278 -1.889 c 1.532 -0.275 2.918 -0.365 4.851 -0.365 s 3.319 0.09 4.851 0.365 c 1.016 0.182 1.45 0.507 2.278 1.889 c 1.079 1.799 2.101 3.715 2.93 5.252 Z m -16.059 2.994 c 0 -0.828 -0.672 -1.5 -1.5 -1.5 s -1.5 0.672 -1.5 1.5 s 0.672 1.5 1.5 1.5 s 1.5 -0.672 1.5 -1.5 Z m 10 1 c 0 -0.276 -0.224 -0.5 -0.5 -0.5 h -7 c -0.276 0 -0.5 0.224 -0.5 0.5 s 0.224 0.5 0.5 0.5 h 7 c 0.276 0 0.5 -0.224 0.5 -0.5 Z m 2.941 -5.527 s -0.74 -1.826 -1.631 -3.142 c -0.202 -0.298 -0.515 -0.502 -0.869 -0.566 c -1.511 -0.272 -2.835 -0.359 -4.441 -0.359 s -2.93 0.087 -4.441 0.359 c -0.354 0.063 -0.667 0.267 -0.869 0.566 c -0.891 1.315 -1.631 3.142 -1.631 3.142 c 1.64 0.313 4.309 0.497 6.941 0.497 s 5.301 -0.184 6.941 -0.497 Z m 2.059 4.527 c 0 -0.828 -0.672 -1.5 -1.5 -1.5 s -1.5 0.672 -1.5 1.5 s 0.672 1.5 1.5 1.5 s 1.5 -0.672 1.5 -1.5 Z m -18.298 -6.5 h -2.202 c -0.276 0 -0.5 0.224 -0.5 0.5 v 0.511 c 0 0.793 0.926 0.989 1.616 0.989 l 1.086 -2 Z" />
            </svg>
        </div>
        <p class="ml-16 text-sm font-medium text-gray-500 truncate">Ukupno Vozila</p>
      </dt>
      <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
        <p class="text-2xl font-semibold text-gray-900">72</p>
        
        <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
          <div class="text-sm">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Prikaži sve<span class="sr-only"> Ukupno Vozila</span></a>
          </div>
        </div>
      </dd>
    </div>

    <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
      <dt>
        <div class="absolute bg-gray-700 rounded-md p-3">
          <!-- Heroicon name: outline/mail-open -->
          <svg class="h-6 w-6 text-yellow-400" stroke-width="2" stroke="currentColor" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
            <path d="M446.836 353.745a111.71 111.71 0 1 0 0-223.418 111.71 111.71 0 0 0 0 223.418zm0 74.473c102.829 0 186.182-83.353 186.182-186.182S549.665 55.855 446.836 55.855s-186.181 83.353-186.181 186.181 83.353 186.182 186.181 186.182zm-305.43 153.488A148.945 148.945 0 0 1 286.72 465.455h320.233a148.945 148.945 0 0 1 145.315 116.251l57.623 256.112H633.018v-74.473H716.8l-37.2-165.292a74.473 74.473 0 0 0-72.647-58.126H286.72a74.473 74.473 0 0 0-72.648 58.126l-37.2 165.292h102.4v74.473H83.783l57.623-256.112z" fill="currentColor"/>
            <path d="M446.836 949.527a148.945 148.945 0 1 0 0-297.89 148.945 148.945 0 0 0 0 297.89zm0 74.473c123.383 0 223.419-100.035 223.419-223.418S570.219 577.164 446.836 577.164 223.418 677.199 223.418 800.582 323.454 1024 446.836 1024z" fill="currentColor"/>
            </svg>
        </div>
        <p class="ml-16 text-sm font-medium text-gray-500 truncate">Ukupno Vozača</p>
      </dt>
      <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
        <p class="text-2xl font-semibold text-gray-900">162</p>
        <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
          <div class="text-sm">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Prikaži sve<span class="sr-only"> Ukupno Vozača</span></a>
          </div>
        </div>
      </dd>
    </div>

    <div class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
      <dt>
        <div class="absolute bg-gray-700 rounded-md p-3">
          <!-- Heroicon name: outline/cursor-click -->
          <svg class="h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
        </div>
        <p class="ml-16 text-sm font-medium text-gray-500 truncate">Ukupno Klijenata</p>
      </dt>
      <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
        <p class="text-2xl font-semibold text-gray-900">356</p>
        <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
          <div class="text-sm">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Prikaži sve<span class="sr-only"> Ukupno Klijenata</span></a>
          </div>
        </div>
      </dd>
    </div>
  </dl>
</div>

<!-- Active drivers on road -->
<div class="px-4 mt-5">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-xl font-semibold text-gray-900">Aktivni vozači</h1>
      <p class="mt-2 text-sm text-gray-700">Lista aktivnih vozača na putu.</p>
    </div>
  </div>
  <div class="-mx-4 mt-8 overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:-mx-6 md:mx-0 md:rounded-lg">
    <table class="min-w-full divide-y divide-gray-300">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Ime</th>
          <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Vozilo</th>
          <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 sm:table-cell">Kontakt</th>
          <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200 bg-white">
        <tr>
          <td class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
            Maksim Vuković
            <dl class="font-normal lg:hidden">
              <dt class="sr-only">Vozilo</dt>
              <dd class="mt-1 truncate text-gray-700">Audi A6 - NS548-LJ</dd>
              <dt class="sr-only sm:hidden">Kontakt</dt>
              <dd class="flex mt-2 truncate text-gray-500 sm:hidden">
                <span class="inline-flex items-center mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                </span>
                0628704721
              </dd>
            </dl>
          </td>
          <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">Audi A6 - NS548-LJ</td>
          <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">0628704721</td>
          <td class="px-3 py-4 text-sm text-gray-500"><span class="inline-flex rounded-full bg-green-100 text-xs font-semibold leading-5 text-green-800">Aktivan</span></td>
        </tr>

        <tr>
          <td class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
            Maksim Vuković
            <dl class="font-normal lg:hidden">
              <dt class="sr-only">Vozilo</dt>
              <dd class="mt-1 truncate text-gray-700">Audi A6 - NS548-LJ</dd>
              <dt class="sr-only sm:hidden">Kontakt</dt>
              <dd class="flex mt-2 truncate text-gray-500 sm:hidden">
                <span class="inline-flex items-center mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                </span>
                0628704721
              </dd>
            </dl>
          </td>
          <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">Audi A6 - NS548-LJ</td>
          <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">0628704721</td>
          <td class="px-3 py-4 text-sm text-gray-500"><span class="inline-flex rounded-full bg-green-100 text-xs font-semibold leading-5 text-green-800">Aktivan</span></td>
        </tr>
        <tr>
          <td class="w-full max-w-0 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:w-auto sm:max-w-none sm:pl-6">
            Maksim Vuković
            <dl class="font-normal lg:hidden">
              <dt class="sr-only">Vozilo</dt>
              <dd class="mt-1 truncate text-gray-700">Audi A6 - NS548-LJ</dd>
              <dt class="sr-only sm:hidden">Kontakt</dt>
              <dd class="flex mt-2 truncate text-gray-500 sm:hidden">
                <span class="inline-flex items-center mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                </span>
                0628704721
              </dd>
            </dl>
          </td>
          <td class="hidden px-3 py-4 text-sm text-gray-500 lg:table-cell">Audi A6 - NS548-LJ</td>
          <td class="hidden px-3 py-4 text-sm text-gray-500 sm:table-cell">0628704721</td>
          <td class="px-3 py-4 text-sm text-gray-500"><span class="inline-flex rounded-full bg-green-100 text-xs font-semibold leading-5 text-green-800">Aktivan</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- ? -->

@endsection