<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Vehicle;
use App\Models\Admin\VehicleRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

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
        /*$validate = request()->validateWithBag('create_vehicle_registration', [
            'vehicle_id' => 'required',
            'price' => 'required|numeric',
            'purchase_date' => 'required',
            'expiration_date' => 'required'
        ]);

        VehicleRegistration::create($validate);*/

        $validate = request()->validateWithBag('create_vehicle_registration', [
            'vehicle_id' => 'required',
            'price' => 'required|numeric',
            'purchase_date' => 'required',
            'expiration_date' => 'required',
            'receipt' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:5120'
        ]);
        $file = $request->file('receipt');
        $vehicleRegistration = new VehicleRegistration;
        
        $vehicleRegistration->vehicle_id = $request->vehicle_id;
        $vehicleRegistration->price = $request->price;
        $vehicleRegistration->purchase_date = $request->purchase_date;
        $vehicleRegistration->expiration_date = $request->expiration_date;


        if($request->hasFile('receipt'))
            {
                
                $fileName = uniqid().'_'.$file->getClientOriginalName();
                Image::make($file->getRealPath())->resize('800', '800')->save(storage_path('app/public/registration/'.$fileName));
                
                $vehicleRegistration->receipt = $fileName;
            }
        $vehicleRegistration->save();

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

        $path = storage_path('app/public/registration/'.$vehicleRegistration->receipt);
        File::delete($path);
        $vehicleRegistration->delete();

         return redirect(route('vehicleRegistrations.index'))->with('crudMessage', 'Registracija uspešno izbrisana.');
    }
}
