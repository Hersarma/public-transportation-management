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
          <form method="POST" action="{{ route('vignettes.store') }}" enctype="multipart/form-data" class="space-y-8 divide-y divide-gray-200 bg-white lg:px-8 px-2 py-4 rounded-lg">
            @csrf
            <input type="text" name="vehicle_id" value="" class="set_vehicle_id hidden">
            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
              <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                <div>
                  <h3 class="text-lg leading-6 font-medium text-gray-900">Nova Vinjeta</h3>
                </div>
                <div class="space-y-6 sm:space-y-5">
                  <div x-data="{open:false}" class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="vehicle_id" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Vozilo </label>
                    <div class="relative mt-1 sm:mt-0 sm:col-span-2">
                      <div class="flex items-center">
                        <input @click="open =! open" type="text" readonly placeholder="Izaberi Vozilo" class="setVehicleName cursor-pointer max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
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
                      <p class="text-red-500 text-sm italic mt-4">
                        {{ $errors->create_vignette->first('purchase_date') }}
                      </p>
                      <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                        <div class="">
                          <div class="w-64">
                            <label
                              for="datepicker"
                              class="font-bold mb-1 text-gray-700 block"
                            >Izaberi Datum</label
                            >
                            <div class="relative">
                              <input
                              type="hidden"
                              name="purchase_date"
                              x-ref="date"
                              :value="datepickerValue"
                              />
                              <input
                              type="text"
                              x-on:click="showDatepicker = !showDatepicker"
                              x-model="datepickerValue"
                              x-on:keydown.escape="showDatepicker = false"
                              class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none text-gray-600 border-gray-300 font-medium focus:ring-indigo-500 focus:border-indigo-500"
                              placeholder="Izaberi datum"
                              
                              />
                              <div class="absolute top-0 right-0 px-3 py-2">
                                <svg
                                  class="h-6 w-6 text-gray-400"
                                  fill="none"
                                  viewBox="0 0 24 24"
                                  stroke="currentColor"
                                  >
                                  <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                    />
                                  </svg>
                                </div>
                                <div
                                  class="bg-white mt-12 rounded-lg shadow p-4 absolute z-20 top-0 left-0"
                                  style="width: 17rem"
                                  x-show.transition="showDatepicker"
                                  @click.away="showDatepicker = false"
                                  >
                                  <div
                                    class="flex justify-between items-center mb-2"
                                    >
                                    <div>
                                      <span
                                        x-text="MONTH_NAMES[month]"
                                        class="text-lg font-bold text-gray-800"
                                      ></span>
                                      <span
                                        x-text="year"
                                        class="ml-1 text-lg text-gray-600 font-normal"
                                      ></span>
                                    </div>
                                    <div>
                                      <button
                                      type="button"
                                      class="focus:outline-none focus:shadow-outline transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-100 p-1 rounded-full"
                                      @click="if (month == 0) {
                                      year--;
                                      month = 12;
                                      } month--; getNoOfDays()"
                                      >
                                      <svg
                                        class="h-6 w-6 text-gray-400 inline-flex"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        >
                                        <path
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M15 19l-7-7 7-7"
                                          />
                                        </svg>
                                        </button>
                                        <button
                                        type="button"
                                        class="focus:outline-none focus:shadow-outline transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-100 p-1 rounded-full"
                                        @click="if (month == 11) {
                                        month = 0;
                                        year++;
                                        } else {
                                        month++;
                                        } getNoOfDays()"
                                        >
                                        <svg
                                          class="h-6 w-6 text-gray-400 inline-flex"
                                          fill="none"
                                          viewBox="0 0 24 24"
                                          stroke="currentColor"
                                          >
                                          <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 5l7 7-7 7"
                                            />
                                          </svg>
                                          </button>
                                        </div>
                                      </div>
                                      <div class="flex flex-wrap mb-3 -mx-1">
                                        <template
                                        x-for="(day, index) in DAYS"
                                        :key="index"
                                        >
                                        <div
                                          style="width: 14.26%"
                                          class="px-0.5"
                                          >
                                          <div
                                            x-text="day"
                                            class="text-gray-800 font-medium text-center text-xs"
                                          ></div>
                                        </div>
                                        </template>
                                      </div>
                                      <div class="flex flex-wrap -mx-1">
                                        <template x-for="blankday in blankdays">
                                        <div
                                          style="width: 14.28%"
                                          class="text-center border p-1 border-transparent text-sm"
                                        ></div>
                                        </template>
                                        <template
                                        x-for="(date, dateIndex) in no_of_days"
                                        :key="dateIndex"
                                        >
                                        <div
                                          style="width: 14.28%"
                                          class="px-1 mb-1"
                                          >
                                          <div
                                            @click="getDateValue(date)"
                                            x-text="date"
                                            class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                            :class="{
                                            'bg-indigo-200': isToday(date) == true,
                                            'text-gray-600 hover:bg-indigo-200': isToday(date) == false && isSelectedDate(date) == false,
                                            'bg-indigo-500 text-white hover:bg-opacity-75': isSelectedDate(date) == true
                                            }"
                                          ></div>
                                        </div>
                                        </template>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                          <label for="expirationDate" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Datum Isteka </label>
                          <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <p class="text-red-500 text-sm italic mt-4">
                              {{ $errors->create_vignette->first('expirationDate') }}
                            </p>
                            <!-- Datepicker -->
                            <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                              <div class="">
                                <div class="w-64">
                                  <label
                                    for="datepicker"
                                    class="font-bold mb-1 text-gray-700 block"
                                  >Izaberi Datum</label
                                  >
                                  <div class="relative">
                                    <input
                                    type="hidden"
                                    name="expirationDate"
                                    x-ref="date"
                                    :value="datepickerValue"
                                    />
                                    <input
                                    type="text"
                                    x-on:click="showDatepicker = !showDatepicker"
                                    x-model="datepickerValue"
                                    x-on:keydown.escape="showDatepicker = false"
                                    class="w-full pl-4 pr-10 py-3 leading-none rounded-lg shadow-sm focus:outline-none text-gray-600 border-gray-300 font-medium focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="Izaberi datum"
                                    
                                    />
                                    <div class="absolute top-0 right-0 px-3 py-2">
                                      <svg
                                        class="h-6 w-6 text-gray-400"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        >
                                        <path
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                          />
                                        </svg>
                                      </div>
                                      <div
                                        class="bg-white mt-12 rounded-lg shadow p-4 absolute z-10 top-0 left-0"
                                        style="width: 17rem"
                                        x-show.transition="showDatepicker"
                                        @click.away="showDatepicker = false"
                                        >
                                        <div
                                          class="flex justify-between items-center mb-2"
                                          >
                                          <div>
                                            <span
                                              x-text="MONTH_NAMES[month]"
                                              class="text-lg font-bold text-gray-800"
                                            ></span>
                                            <span
                                              x-text="year"
                                              class="ml-1 text-lg text-gray-600 font-normal"
                                            ></span>
                                          </div>
                                          <div>
                                            <button
                                            type="button"
                                            class="focus:outline-none focus:shadow-outline transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-100 p-1 rounded-full"
                                            @click="if (month == 0) {
                                            year--;
                                            month = 12;
                                            } month--; getNoOfDays()"
                                            >
                                            <svg
                                              class="h-6 w-6 text-gray-400 inline-flex"
                                              fill="none"
                                              viewBox="0 0 24 24"
                                              stroke="currentColor"
                                              >
                                              <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M15 19l-7-7 7-7"
                                                />
                                              </svg>
                                              </button>
                                              <button
                                              type="button"
                                              class="focus:outline-none focus:shadow-outline transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-100 p-1 rounded-full"
                                              @click="if (month == 11) {
                                              month = 0;
                                              year++;
                                              } else {
                                              month++;
                                              } getNoOfDays()"
                                              >
                                              <svg
                                                class="h-6 w-6 text-gray-400 inline-flex"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                >
                                                <path
                                                  stroke-linecap="round"
                                                  stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M9 5l7 7-7 7"
                                                  />
                                                </svg>
                                                </button>
                                              </div>
                                            </div>
                                            <div class="flex flex-wrap mb-3 -mx-1">
                                              <template
                                              x-for="(day, index) in DAYS"
                                              :key="index"
                                              >
                                              <div
                                                style="width: 14.26%"
                                                class="px-0.5"
                                                >
                                                <div
                                                  x-text="day"
                                                  class="text-gray-800 font-medium text-center text-xs"
                                                ></div>
                                              </div>
                                              </template>
                                            </div>
                                            <div class="flex flex-wrap -mx-1">
                                              <template x-for="blankday in blankdays">
                                              <div
                                                style="width: 14.28%"
                                                class="text-center border p-1 border-transparent text-sm"
                                              ></div>
                                              </template>
                                              <template
                                              x-for="(date, dateIndex) in no_of_days"
                                              :key="dateIndex"
                                              >
                                              <div
                                                style="width: 14.28%"
                                                class="px-1 mb-1"
                                                >
                                                <div
                                                  @click="getDateValue(date)"
                                                  x-text="date"
                                                  class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                  :class="{
                                                  'bg-indigo-200': isToday(date) == true,
                                                  'text-gray-600 hover:bg-indigo-200': isToday(date) == false && isSelectedDate(date) == false,
                                                  'bg-indigo-500 text-white hover:bg-opacity-75': isSelectedDate(date) == true
                                                  }"
                                                ></div>
                                              </div>
                                              </template>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Datepicker -->
                                </div>
                              </div>
                              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="country" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Država </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                  <input type="text" name="country" id="country" autocomplete="country" value="{{ old('country') }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                  <p class="text-red-500 text-sm italic mt-4">
                                    {{ $errors->create_vignette->first('country') }}
                                  </p>
                                </div>
                              </div>
                              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="price" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Cena </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                  <input type="text" name="price" id="price" autocomplete="price" value="{{ old('price') }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                  <p class="text-red-500 text-sm italic mt-4">
                                    {{ $errors->create_vignette->first('price') }}
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
                    @push('scripts')
                    <script src="/js/datepicker.js"></script>
                    @endpush
                    
                  </div>
                </div>
              </div>
            </div>