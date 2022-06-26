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
              <svg class="flex-shrink-0 h-6 w-6 text-yellow-400" stroke-width="2" stroke="currentColor" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                <path d="M446.836 353.745a111.71 111.71 0 1 0 0-223.418 111.71 111.71 0 0 0 0 223.418zm0 74.473c102.829 0 186.182-83.353 186.182-186.182S549.665 55.855 446.836 55.855s-186.181 83.353-186.181 186.181 83.353 186.182 186.181 186.182zm-305.43 153.488A148.945 148.945 0 0 1 286.72 465.455h320.233a148.945 148.945 0 0 1 145.315 116.251l57.623 256.112H633.018v-74.473H716.8l-37.2-165.292a74.473 74.473 0 0 0-72.647-58.126H286.72a74.473 74.473 0 0 0-72.648 58.126l-37.2 165.292h102.4v74.473H83.783l57.623-256.112z" fill="currentColor"/>
                <path d="M446.836 949.527a148.945 148.945 0 1 0 0-297.89 148.945 148.945 0 0 0 0 297.89zm0 74.473c123.383 0 223.419-100.035 223.419-223.418S570.219 577.164 446.836 577.164 223.418 677.199 223.418 800.582 323.454 1024 446.836 1024z" fill="currentColor"/>
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
          <form method="POST" action="{{ route('drivers.store') }}" enctype="multipart/form-data" class="space-y-8 divide-y divide-gray-200 bg-white lg:px-8 px-2 py-4 rounded-lg">
            @csrf
            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
              <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                <div>
                  <h3 class="text-lg leading-6 font-medium text-gray-900">Novi Vozač</h3>
                  <p class="mt-1 max-w-2xl text-sm text-gray-500">Osnovni podaci.</p>
                </div>
                <div class="space-y-6 sm:space-y-5">
                  <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="lname" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Prezime  <span class="font-bold ml-3">1.</span></label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <input type="text" name="lname" id="lname" autocomplete="lname" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                      <p class="text-red-500 text-sm italic mt-4">
                        {{ $errors->create_driver->first('lname') }}
                      </p>
                    </div>
                  </div>
                  <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="fname" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Ime  <span class="font-bold ml-3">2.</span></label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <input type="text" name="fname" id="fname" autocomplete="fname" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                      <p class="text-red-500 text-sm italic mt-4">
                        {{ $errors->create_driver->first('fname') }}
                      </p>
                    </div>
                  </div>
                  <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="birthDate" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Datum rođenja  <span class="font-bold ml-3">3</span></label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                      <p class="text-red-500 text-sm italic mt-4">
                        {{ $errors->create_driver->first('birthDate') }}
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
                              name="birthDate"
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
                          <label for="placeOfBirth" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Mesto rođenja  <span class="font-bold ml-3">3.</span></label>
                          <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" name="placeOfBirth" id="placeOfBirth" autocomplete="placeOfBirth" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            <p class="text-red-500 text-sm italic mt-4">
                              {{ $errors->create_driver->first('placeOfBirth') }}
                            </p>
                          </div>
                        </div>
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                          <label for="driverLicenseIssuedDate" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Datum izdavanja Vozačke dozvole  <span class="font-bold ml-3">4a.</span></label>
                          <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <p class="text-red-500 text-sm italic mt-4">
                              {{ $errors->create_driver->first('driverLicenseIssuedDate') }}
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
                                    name="driverLicenseIssuedDate"
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
                                <label for="driverLicenseExpirationDate" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Dozvola važi do  <span class="font-bold ml-3">4b.</span></label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                  <p class="text-red-500 text-sm italic mt-4">
                                    {{ $errors->create_driver->first('driverLicenseExpirationDate') }}
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
                                          name="driverLicenseExpirationDate"
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
                                      <label for="driverLicenseIssuedBy" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Dozvolu izdao  <span class="font-bold ml-3">D.1</span></label>
                                      <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="driverLicenseIssuedBy" id="driverLicenseIssuedBy" autocomplete="driverLicenseIssuedBy" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                        <p class="text-red-500 text-sm italic mt-4">
                                          {{ $errors->create_driver->first('driverLicenseIssuedBy') }}
                                        </p>
                                      </div>
                                    </div>
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                      <label for="driverLicenseId" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Broj dozvole  <span class="font-bold ml-3">D.1</span></label>
                                      <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="driverLicenseId" id="driverLicenseId" autocomplete="driverLicenseId" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                        <p class="text-red-500 text-sm italic mt-4">
                                          {{ $errors->create_driver->first('driverLicenseId') }}
                                        </p>
                                      </div>
                                    </div>
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                      <label for="residence" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Prebivalište  <span class="font-bold ml-3">D.1</span></label>
                                      <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="residence" id="residence" autocomplete="residence" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                        <p class="text-red-500 text-sm italic mt-4">
                                          {{ $errors->create_driver->first('residence') }}
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                                  <div>
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">Izaberi Kategorije</h3>
                                    
                                  </div>
                                  <div class="space-y-6 sm:space-y-5">
                                   
                                    <fieldset>
                                      <legend class="text-lg font-medium text-gray-900">Kategorije</legend>
                                      <div class="mt-4 border-t border-b border-gray-200 divide-y divide-gray-200">
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="AM" class="font-medium text-gray-700 select-none">AM</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="AM" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="A1" class="font-medium text-gray-700 select-none">A1</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="A1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="A2" class="font-medium text-gray-700 select-none">A2</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="A2" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="A" class="font-medium text-gray-700 select-none">A</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="A" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="B1" class="font-medium text-gray-700 select-none">B1</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="B1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="B" class="font-medium text-gray-700 select-none">B</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="B" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="BE" class="font-medium text-gray-700 select-none">BE</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="BE" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="C1" class="font-medium text-gray-700 select-none">C1</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="C1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="C1E" class="font-medium text-gray-700 select-none">C1E</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="C1E" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="C" class="font-medium text-gray-700 select-none">C</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="C" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="CE" class="font-medium text-gray-700 select-none">CE</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="CE" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="D1" class="font-medium text-gray-700 select-none">D1</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="D1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="D1E" class="font-medium text-gray-700 select-none">D1E</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="D1E" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="D" class="font-medium text-gray-700 select-none">D</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="D" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="DE" class="font-medium text-gray-700 select-none">DE</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="DE" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="F" class="font-medium text-gray-700 select-none">F</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="F" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                        <div class="relative flex items-start py-4">
                                          <div class="min-w-0 flex-1 text-sm">
                                            <label for="M" class="font-medium text-gray-700 select-none">M</label>
                                          </div>
                                          <div class="ml-3 flex items-center h-5">
                                            <input name="items[][categories]" type="checkbox" value="E" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                          </div>
                                        </div>
                                      </div>
                                    </fieldset>
                                    
                                    
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