@foreach($vehicles as $vehicle)
<div @click="open =! open" class="vehicle py-8 mt-5 border-t border-gray-200 cursor-pointer rounded-lg ring-1 ring-slate-900/5 shadow-lg  hover:bg-sky-500 hover:ring-sky-500 hover:text-white">
  <input type="text" hidden value="{{ $vehicle->id }}" class="hidden">
  <p class="vehicle_name px-4">{{ $vehicle->vehicleManufacturer }} {{ $vehicle->vehicleModel }} {{ $vehicle->registrationPlate }}</p>
</div>
@endforeach