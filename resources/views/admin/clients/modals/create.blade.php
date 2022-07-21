<!-- This example requires Tailwind CSS v2.0+ -->
<div x-cloak x-show="open" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <!--
  Background backdrop, show/hide based on modal state.
  Entering: "ease-out duration-300"
  From: "opacity-0"
  To: "opacity-100"
  Leaving: "ease-in duration-200"
  From: "opacity-100"
  To: "opacity-0"
  -->
  <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
  class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
  <div class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
      <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        class="relative bg-white rounded-lg pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 max-w-7xl w-full">
        <div class="lg:px-8">
          <div class="absolute top-8 left-1/2 transform -translate-x-1/2 -translate-y-1/2 pt-4 pr-4">
            <div class="bg-gray-700 rounded-md px-4 py-3">
              <!-- Heroicon name: outline/users -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
              </svg>
            </div>
          </div>
          <div class="absolute top-0 right-0 pt-4 pr-4">
            <button @click="open = false" type="button" class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="sr-only">Close</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
          </div>
          <form method="POST" action="{{ route('clients.store') }}" class="space-y-8 divide-y divide-gray-200 bg-white lg:px-8 px-2 py-4 rounded-lg">
            @csrf
            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
              <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                <div>
                  <h3 class="text-lg leading-6 font-medium text-gray-900">Novi Klijent</h3>
                  <p class="mt-1 max-w-2xl text-sm text-gray-500">Osnovni podaci.</p>
                </div>
                <div class="space-y-6 sm:space-y-5">
                  <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="lname" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Prezime </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <input type="text" name="lname" id="lname" autocomplete="lname" value="{{ old('lname') }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                      <p class="text-red-500 text-sm italic mt-4">
                        {{ $errors->create_client->first('lname') }}
                      </p>
                    </div>
                  </div>
                  <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="fname" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Ime </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <input type="text" name="fname" id="fname" autocomplete="fname" value="{{ old('fname') }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                      <p class="text-red-500 text-sm italic mt-4">
                        {{ $errors->create_client->first('fname') }}
                      </p>
                    </div>
                  </div>
                  <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="contact" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Broj telefona </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <input type="text" name="contact" id="contact" autocomplete="contact" value="{{ old('contact') }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                      <p class="text-red-500 text-sm italic mt-4">
                        {{ $errors->create_client->first('contact') }}
                      </p>
                    </div>
                  </div>
                   
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                          <label for="personalIdNumber" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> JMBG </label>
                          <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="personalIdNumber" id="personalIdNumber" autocomplete="personalIdNumber" value="{{ old('personalIdNumber') }}" placeholder="Opciono" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            <p class="text-red-500 text-sm italic mt-4">
                              {{ $errors->create_client->first('personalIdNumber') }}
                            </p>
                          </div>
                        </div>
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                          <label for="personalId" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Broj lične karte </label>
                          <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="personalId" id="personalId" autocomplete="personalId" value="{{ old('personalId') }}" placeholder="Opciono" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            <p class="text-red-500 text-sm italic mt-4">
                              {{ $errors->create_client->first('personalId') }}
                            </p>
                          </div>
                        </div>
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                          <label for="passportId" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Broj pasoša </label>
                          <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="passportId" id="passportId" autocomplete="passportId" value="{{ old('passportId') }}" placeholder="Opciono" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            <p class="text-red-500 text-sm italic mt-4">
                              {{ $errors->create_client->first('passportId') }}
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pt-5">
                    <div class="flex justify-end">
                      
                      <button @click="open = false" type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Otkaži</button>
                      
                      
                      <button type="submit" class="ml-3 inline-flex items-center justify-center rounded-md border border-transparent bg-gray-700 px-4 py-2 text-sm font-medium text-yellow-400 shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 sm:w-auto">Sačuvaj</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>