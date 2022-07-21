<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::orderBy('vehicleManufacturer', 'asc')->simplePaginate(10);
        return view('admin.vehicles.index', compact('vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = request()->validateWithBag('create_vehicle', [
            'registrationPlate' => 'required|unique:vehicles',
            'firstRegistrationDate' => 'required',
            'trafficLicenseIssuedDate'=> 'required',
            'fname'=> 'required',
            'lname'=> 'required',
            'residenceAddress'=> 'required',
            'vehicleManufacturer'=> 'required',
            'vehicleModel'=> 'required',
            'year' => 'required',
            'chassisNumber'=> 'required|unique:vehicles',
            'allowedWeight'=> 'required',
            'weight'=> 'required',
            'trafficLicenseExpirationDate'=> 'required',
            'cylinderCapacity'=> 'required',
            'horsepower'=> 'required',
            'fuleType'=> 'required',
            'seatingCapacity'=> 'nullable',
            'standingCapacity'=> 'nullable',
            'currentMileage'=> 'required|numeric'
        ]);
        Vehicle::create($validate);

        return redirect(route('vehicles.index'))->with('crudMessage', 'Vozilo uspešno kreirano.');

        //dd($validate);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return view('admin.vehicles.show', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        if ($request['registrationPlate'] == $vehicle->registrationPlate || $request['chassisNumber'] == $vehicle->chassisNumber) {
            $validate = request()->validateWithBag('edit_vehicle', [
            'registrationPlate' => 'required',
            'firstRegistrationDate' => 'required',
            'trafficLicenseIssuedDate'=> 'required',
            'fname'=> 'required',
            'lname'=> 'required',
            'residenceAddress'=> 'required',
            'vehicleManufacturer'=> 'required',
            'vehicleModel'=> 'required',
            'year' => 'required',
            'chassisNumber'=> 'required',
            'allowedWeight'=> 'required',
            'weight'=> 'required',
            'trafficLicenseExpirationDate'=> 'required',
            'cylinderCapacity'=> 'required',
            'horsepower'=> 'required',
            'fuleType'=> 'required',
            'seatingCapacity'=> 'nullable',
            'standingCapacity'=> 'nullable',
            'currentMileage'=> 'required|numeric'
        ]);
        } else {
            $validate = request()->validateWithBag('edit_vehicle', [
            'registrationPlate' => 'required|unique:vehicles',
            'firstRegistrationDate' => 'required',
            'trafficLicenseIssuedDate'=> 'required',
            'fname'=> 'required',
            'lname'=> 'required',
            'residenceAddress'=> 'required',
            'vehicleManufacturer'=> 'required',
            'vehicleModel'=> 'required',
            'year' => 'required',
            'chassisNumber'=> 'required|unique:vehicles',
            'allowedWeight'=> 'required',
            'weight'=> 'required',
            'trafficLicenseExpirationDate'=> 'required',
            'cylinderCapacity'=> 'required',
            'horsepower'=> 'required',
            'fuleType'=> 'required',
            'seatingCapacity'=> 'nullable',
            'standingCapacity'=> 'nullable',
            'currentMileage'=> 'required|numeric'
        ]);
        }
        
        $vehicle->update($validate);

        return redirect(route('vehicles.show', $vehicle))->with('crudMessage', 'Vozilo uspešno izmenjeno.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect(route('vehicles.index'))->with('crudMessage', 'Vozilo uspešno izbrisano.');
    }
}
