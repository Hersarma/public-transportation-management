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
      <!--
      Modal panel, show/hide based on modal state.
      Entering: "ease-out duration-300"
      From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
      From: "opacity-100 translate-y-0 sm:scale-100"
      To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
      <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        class="relative bg-white rounded-lg pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 max-w-7xl w-full">
        <div class="lg:px-8">
          <div class="absolute top-8 left-1/2 transform -translate-x-1/2 -translate-y-1/2 pt-4 pr-4">
            <div class="bg-gray-700 rounded-md px-4 py-3">
              <!-- Heroicon name: outline/users -->
              <svg class="h-6 w-6 text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M 23.5 7 c 0.276 0 0.5 0.224 0.5 0.5 v 0.511 c 0 0.793 -0.926 0.989 -1.616 0.989 l -1.086 -2 h 2.202 Z m -1.441 3.506 c 0.639 1.186 0.946 2.252 0.946 3.666 c 0 1.37 -0.397 2.533 -1.005 3.981 v 1.847 c 0 0.552 -0.448 1 -1 1 h -1.5 c -0.552 0 -1 -0.448 -1 -1 v -1 h -13 v 1 c 0 0.552 -0.448 1 -1 1 h -1.5 c -0.552 0 -1 -0.448 -1 -1 v -1.847 c -0.608 -1.448 -1.005 -2.611 -1.005 -3.981 c 0 -1.414 0.307 -2.48 0.946 -3.666 c 0.829 -1.537 1.851 -3.453 2.93 -5.252 c 0.828 -1.382 1.262 -1.707 2.278 -1.889 c 1.532 -0.275 2.918 -0.365 4.851 -0.365 s 3.319 0.09 4.851 0.365 c 1.016 0.182 1.45 0.507 2.278 1.889 c 1.079 1.799 2.101 3.715 2.93 5.252 Z m -16.059 2.994 c 0 -0.828 -0.672 -1.5 -1.5 -1.5 s -1.5 0.672 -1.5 1.5 s 0.672 1.5 1.5 1.5 s 1.5 -0.672 1.5 -1.5 Z m 10 1 c 0 -0.276 -0.224 -0.5 -0.5 -0.5 h -7 c -0.276 0 -0.5 0.224 -0.5 0.5 s 0.224 0.5 0.5 0.5 h 7 c 0.276 0 0.5 -0.224 0.5 -0.5 Z m 2.941 -5.527 s -0.74 -1.826 -1.631 -3.142 c -0.202 -0.298 -0.515 -0.502 -0.869 -0.566 c -1.511 -0.272 -2.835 -0.359 -4.441 -0.359 s -2.93 0.087 -4.441 0.359 c -0.354 0.063 -0.667 0.267 -0.869 0.566 c -0.891 1.315 -1.631 3.142 -1.631 3.142 c 1.64 0.313 4.309 0.497 6.941 0.497 s 5.301 -0.184 6.941 -0.497 Z m 2.059 4.527 c 0 -0.828 -0.672 -1.5 -1.5 -1.5 s -1.5 0.672 -1.5 1.5 s 0.672 1.5 1.5 1.5 s 1.5 -0.672 1.5 -1.5 Z m -18.298 -6.5 h -2.202 c -0.276 0 -0.5 0.224 -0.5 0.5 v 0.511 c 0 0.793 0.926 0.989 1.616 0.989 l 1.086 -2 Z" />
              </svg>
            </div>
          </div>
          <div class="absolute top-0 right-0 pt-4 pr-4">
            <button @click="open = false" type="button" class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none">
            <span class="sr-only">Close</span>
            <!-- Heroicon name: outline/x -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
          </div>
          <form method="POST" action="{{ route('vehicles.update', $vehicle) }}" class="space-y-8 divide-y divide-gray-200 bg-white lg:px-8 px-2 py-4 rounded-lg">
            @csrf
            @method('PATCH')
            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
              <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                <div>
                  <h3 class="text-lg leading-6 font-medium text-gray-900">izmeni Vozilo</h3>
                  <p class="mt-1 max-w-2xl text-sm text-gray-500">Osnovni podaci.</p>
                </div>
                <div class="space-y-6 sm:space-y-5">
                  <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="registrationPlate" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Registarske oznake <span class="font-bold ml-3">A</span></label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <input type="text" name="registrationPlate" id="registrationPlate" autocomplete="registrationPlate" value="{{$vehicle->registrationPlate}}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                      <p class="text-red-500 text-sm italic mt-4">
                        {{ $errors->edit_vehicle->first('registrationPlate') }}
                      </p>
                    </div>
                  </div>
                  <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="firstRegistrationDate" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Datum prve registracije  <span class="font-bold ml-3">B</span></label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <p class="text-red-500 text-sm italic mt-4">
                        {{ $errors->edit_vehicle->first('firstRegistrationDate') }}
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
                              name="firstRegistrationDate"
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
                          </div>
                        </div>
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                          <label for="trafficLicenseIssuedDate" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Datum izdavanja saobraćajne dozvole  <span class="font-bold ml-3">I</span></label>
                          <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <p class="text-red-500 text-sm italic mt-4">
                              {{ $errors->edit_vehicle->first('trafficLicenseIssuedDate') }}
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
                                    name="trafficLicenseIssuedDate"
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
                                        class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0"
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
                                <label for="lname" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Prezime  <span class="font-bold ml-3">C.1.1.</span></label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                  <input type="text" name="lname" id="lname" autocomplete="lname" value="{{ $vehicle->lname }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                  <p class="text-red-500 text-sm italic mt-4">
                                    {{ $errors->edit_vehicle->first('lname') }}
                                  </p>
                                </div>
                              </div>
                              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="fname" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Ime  <span class="font-bold ml-3">C.1.2.</span></label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                  <input type="text" name="fname" id="fname" autocomplete="fname" value="{{ $vehicle->fname }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                  <p class="text-red-500 text-sm italic mt-4">
                                    {{ $errors->edit_vehicle->first('fname') }}
                                  </p>
                                </div>
                              </div>
                              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="residenceAddress" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Prebivalište  <span class="font-bold ml-3">C.1.3.</span></label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                  <input type="text" name="residenceAddress" id="residenceAddress" autocomplete="residenceAddress" value="{{ $vehicle->residenceAddress }}" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                                  <p class="text-red-500 text-sm italic mt-4">
                                    {{ $errors->edit_vehicle->first('residenceAddress') }}
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                            <div>
                              
                              <p class="mt-1 max-w-2xl text-sm text-gray-500">Osnovni podaci o vozilu.</p>
                            </div>
                            <div class="space-y-6 sm:space-y-5">
                              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="vehicleManufacturer" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Proizvođač  <span class="font-bold ml-3">D.1</span></label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                  <input type="text" name="vehicleManufacturer" id="vehicleManufacturer" autocomplete="vehicleManufacturer" value="{{ $vehicle->vehicleManufacturer }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                  <p class="text-red-500 text-sm italic mt-4">
                                    {{ $errors->edit_vehicle->first('vehicleManufacturer') }}
                                  </p>
                                </div>
                              </div>
                              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="vehicleModel" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Model  <span class="font-bold ml-3">D.3</span></label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                  <input type="text" name="vehicleModel" id="vehicleModel" autocomplete="vehicleModel" value="{{ $vehicle->vehicleModel }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                  <p class="text-red-500 text-sm italic mt-4">
                                    {{ $errors->edit_vehicle->first('vehicleModel') }}
                                  </p>
                                </div>
                              </div>
                              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                      <label for="year" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Godište </label>
                                      <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input id="year" name="year" type="text" autocomplete="year" value="{{ $vehicle->year }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                          {{ $errors->edit_vehicle->first('year') }}
                                        </p>
                                      </div>
                                    </div>
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                      <label for="chassisNumber" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Broj šasije  <span class="font-bold ml-3">E</span></label>
                                      <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input id="chassisNumber" name="chassisNumber" type="text" autocomplete="chassisNumber" value="{{ $vehicle->chassisNumber }}" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                                        <p class="text-red-500 text-sm italic mt-4">
                                          {{ $errors->edit_vehicle->first('chassisNumber') }}
                                        </p>
                                      </div>
                                    </div>
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                      <label for="allowedWeight" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Najveća dozvoljena masa  <span class="font-bold ml-3">F.1</span></label>
                                      <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="allowedWeight" id="allowedWeight" autocomplete="allowedWeight" value="{{ $vehicle->allowedWeight }}" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs border-gray-300 rounded-md">
                                        <p class="text-red-500 text-sm italic mt-4">
                                          {{ $errors->edit_vehicle->first('allowedWeight') }}
                                        </p>
                                      </div>
                                    </div>
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                      <label for="weight" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Masa  <span class="font-bold ml-3">G</span></label>
                                      <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="weight" id="weight" autocomplete="weight" value="{{ $vehicle->weight }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                        <p class="text-red-500 text-sm italic mt-4">
                                          {{ $errors->edit_vehicle->first('weight') }}
                                        </p>
                                      </div>
                                    </div>
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                      <label for="trafficLicenseExpirationDate" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Datum isteka saobraćajne dozvole  <span class="font-bold ml-3">H</span></label>
                                      <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <p class="text-red-500 text-sm italic mt-4">
                                          {{ $errors->edit_vehicle->first('trafficLicenseExpirationDate') }}
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
                                                name="trafficLicenseExpirationDate"
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
                                                    class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0"
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
                                            <label for="cylinderCapacity" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Radna zapremina motora  <span class="font-bold ml-3">P.1</span></label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                              <input type="text" name="cylinderCapacity" id="cylinderCapacity" autocomplete="cylinderCapacity" value="{{ $vehicle->cylinderCapacity }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                              <p class="text-red-500 text-sm italic mt-4">
                                                {{ $errors->edit_vehicle->first('cylinderCapacity') }}
                                              </p>
                                            </div>
                                          </div>
                                          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="horsepower" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Snaga motora u kW  <span class="font-bold ml-3">P.2</span></label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                              <input type="text" name="horsepower" id="horsepower" autocomplete="horsepower" value="{{ $vehicle->horsepower }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                              <p class="text-red-500 text-sm italic mt-4">
                                                {{ $errors->edit_vehicle->first('horsepower') }}
                                              </p>
                                            </div>
                                          </div>
                                          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="fuleType" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Vrsta goriva  <span class="font-bold ml-3">P.3</span></label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                              <input type="text" name="fuleType" id="fuleType" autocomplete="fuleType" value="{{ $vehicle->fuleType }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                              <p class="text-red-500 text-sm italic mt-4">
                                                {{ $errors->edit_vehicle->first('fuleType') }}
                                              </p>
                                            </div>
                                          </div>
                                          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="seatingCapacity" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Broj mesta za sedenje  <span class="font-bold ml-3">S.1</span></label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                              <input type="text" name="seatingCapacity" id="seatingCapacity" autocomplete="seatingCapacity" value="{{ $vehicle->seatingCapacity }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                              <p class="text-red-500 text-sm italic mt-4">
                                                {{ $errors->edit_vehicle->first('seatingCapacity') }}
                                              </p>
                                            </div>
                                          </div>
                                          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="standingCapacity" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Broj mesta za stajanje  <span class="font-bold ml-3">S.2</span></label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                              <input type="text" name="standingCapacity" id="standingCapacity" autocomplete="standingCapacity" value="{{ $vehicle->standingCapacity }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                              <p class="text-red-500 text-sm italic mt-4">
                                                {{ $errors->edit_vehicle->first('standingCapacity') }}
                                              </p>
                                            </div>
                                          </div>
                                          <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="currentMileage" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Kilometraža </label>
                                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                              <input type="text" name="currentMileage" id="currentMileage" autocomplete="currentMileage" value="{{ $vehicle->currentMileage }}" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                              <p class="text-red-500 text-sm italic mt-4">
                                                {{ $errors->edit_vehicle->first('currentMileage') }}
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