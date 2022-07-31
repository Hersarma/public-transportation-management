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
              <i class="fa-solid fa-road fa-lg text-yellow-400"></i>
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
          <form method="POST" action="{{ route('vignettes.update', $vignette) }}" enctype="multipart/form-data" class="space-y-8 divide-y divide-gray-200 bg-white lg:px-8 px-2 py-4 rounded-lg">
            @csrf
            @method('PATCH')
            <input type="text" name="vehicle_id" value="{{ $vignette->vehicle_id }}" class="set_vehicle_id hidden">
            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
              <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                <div>
                  <h3 class="text-lg leading-6 font-medium text-gray-900">Izmeni Vinjetu</h3>
                </div>
                <div class="space-y-6 sm:space-y-5">
                  <div x-data="{open:false}" class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="vehicle_id" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Vozilo </label>
                    <div class="relative mt-1 sm:mt-0 sm:col-span-2">
                      <div class="flex items-center">
                        <input @click="open =! open" type="text" readonly placeholder="{{$vehicle->vehicleManufacturer}} {{$vehicle->vehicleModel}} {{$vehicle->registrationPlate}}" class="setVehicleName cursor-pointer max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                        <div class="-ml-10">
                          <svg class="text-gray-700  h-5 w-5 transform group-hover:text-gray-400 transition-colors ease-in-out duration-150" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        </div>
                      </div>
                      <div x-cloak x-show="open" @click.away="open = false" class="absolute overflow-auto z-10 h-96 mt-6 w-full lg:w-2/3 bg-white rounded-md shadow">
                        <div class="relative border border-gray-300 rounded-md px-4 py-3 shadow-sm focus-within:ring-1 focus-within:ring-indigo-600 focus-within:border-indigo-600">
                          <label for="search_vehicle" class="absolute -top-1 left-2 -mt-px inline-block px-1 bg-white text-xs font-medium text-gray-900">Ime-Registracija</label>
                          <input type="search" name="search_vehicle" id="search_vehicle" class="search_vehicle block w-full border-0 p-0 text-gray-900 placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Pretraga Vozila">
                        </div>
                        <div class="mt-5 px-2">
                          @foreach($vehicles as $vehicle)
                          <div @click="open =! open" class="vehicle py-8 mt-5 border-t border-gray-200 cursor-pointer rounded-lg ring-1 ring-slate-900/5 shadow-lg  hover:bg-sky-500 hover:ring-sky-500 hover:text-white">
                            <input type="text" hidden value="{{ $vehicle->id }}" class="hidden">
                            <p class="vehicle_name px-4">{{ $vehicle->vehicleManufacturer }} {{ $vehicle->vehicleModel }} {{ $vehicle->registrationPlate }}</p>
                            
                          </div>
                          
                          @endforeach
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="purchase_date" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Datum kupovine </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <input readonly type="text" name="purchase_date" id="purchase_date" autocomplete="purchase_date" value="{{ $vignette->purchase_date->format('d-m-Y') }}" class="datepicker max-w-lg block py-4 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                      <p class="text-red-500 text-sm italic mt-4">
                        {{ $errors->edit_vignette->first('purchase_date') }}
                      </p>
                    </div>
                  </div>
                  <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="expiration_date" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Važi do </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <input readonly type="text" name="expiration_date" id="expiration_date" autocomplete="expiration_date" value="{{ $vignette->expiration_date->format('d-m-Y') }}" class="datepicker max-w-lg block py-4 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                      <p class="text-red-500 text-sm italic mt-4">
                        {{ $errors->edit_vignette->first('expiration_date') }}
                      </p>
                    </div>
                  </div>
                  <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="country" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Država </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <input type="text" name="country" id="country" autocomplete="country" value="{{ $vignette->country }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                      <p class="text-red-500 text-sm italic mt-4">
                        {{ $errors->edit_vignette->first('country') }}
                      </p>
                    </div>
                  </div>
                  <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="price" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Cena </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <input type="text" name="price" id="price" autocomplete="price" value="{{ $vignette->price }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                      <p class="text-red-500 text-sm italic mt-4">
                        {{ $errors->edit_vignette->first('price') }}
                      </p>
                    </div>
                  </div>
                  <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <p class="text-sm font-medium text-gray-700 sm:mt-px sm:pt-2 mb-2"> Dodaj račun </p>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <label for="receipt" class="w-1/4 text-sm text-slate-500
                        mr-4 py-2 px-4
                        rounded-full border-0
                        text-sm font-semibold
                        bg-violet-50 text-violet-700
                        hover:bg-violet-100">
                        Izaberi ...
                      </label>
                      <p class="fileName inline-flex"></p>
                      <input type="file" name="receipt" id="receipt" autocomplete="receipt" class="sr-only">
                      <p class="text-red-500 text-sm italic mt-4">
                        {{ $errors->create_vignette->first('receipt') }}
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