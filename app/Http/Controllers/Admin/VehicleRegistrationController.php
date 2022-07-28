<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Vehicle;
use App\Models\Admin\VehicleRegistration;
use Illuminate\Http\Request;

class VehicleRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::orderBy('vehicleManufacturer', 'asc')->simplePaginate(50);
        $vehicleRegistrations = VehicleRegistration::with('vehicle')->orderBy('expiration_date', 'desc')->simplePaginate(10);
        return view('admin.vehicleRegistrations.index', compact('vehicleRegistrations', 'vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validate = request()->validateWithBag('create_vehicle_registration', [
            'vehicle_id' => 'required',
            'price' => 'required|numeric',
            'purchase_date' => 'required',
            'expiration_date' => 'required'
        ]);

        VehicleRegistration::create($validate);

        return redirect(route('vehicleRegistrations.index'))->with('crudMessage', 'Registracija uspešno kreirana.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(vehicleRegistration $vehicleRegistration)
    {
        $vehicles = Vehicle::orderBy('vehicleManufacturer', 'asc')->simplePaginate('50');
        $vehicle = $vehicleRegistration->vehicle()->first();
        return view('admin.vehicleRegistrations.show', compact('vehicleRegistration', 'vehicle', 'vehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vehicleRegistration $vehicleRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehicleRegistration $vehicleRegistration)
    {
        $vehicleRegistration->delete();

         return redirect(route('vehicleRegistration.index'))->with('crudMessage', 'Registracija uspešno izbrisana.');
    }
}
