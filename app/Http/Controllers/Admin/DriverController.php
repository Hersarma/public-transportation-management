<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::orderBy('fname', 'asc')->simplePaginate(10);
        return view('admin.drivers.index', compact('drivers'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request['categories']);
        $validate = request()->validateWithBag('create_driver', [

        'lname' => 'required',
        'fname' => 'required',
        'contact' => 'required',
        'birthDate' => 'required',
        'placeOfBirth' => 'required',
        'driverLicenseIssuedDate' => 'required',
        'driverLicenseExpirationDate' => 'required',
        'driverLicenseIssuedBy' => 'required',
        'driverLicenseId' => 'required|unique:drivers',
        'residence' => 'required',
        'category_AM' => 'nullable',
        'category_A1' => 'nullable',
        'category_A2' => 'nullable',
        'category_A' => 'nullable',
        'category_B1' => 'nullable',
        'category_B' => 'nullable',
        'category_BE' => 'nullable',
        'category_C1' => 'nullable',
        'category_C1E' => 'nullable',
        'category_C' => 'nullable',
        'category_CE' => 'nullable',
        'category_D1' => 'nullable',
        'category_D1E' => 'nullable',
        'category_D' => 'nullable',
        'category_DE' => 'nullable',
        'category_F' => 'nullable',
        'category_M' => 'nullable'
        
        ]);

        

        $driver = Driver::create($validate);

       

        return redirect(route('drivers.index'))->with('crudMessage', 'Vozač uspešno kreiran.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {


        return view('admin.drivers.show', compact('driver'));
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        if ($request['driverLicenseId'] == $driver->driverLicenseId) {
            $validate = request()->validateWithBag('edit_driver', [
                'lname' => 'required',
                'fname' => 'required',
                'contact' => 'required',
                'birthDate' => 'required',
                'placeOfBirth' => 'required',
                'driverLicenseIssuedDate' => 'required',
                'driverLicenseExpirationDate' => 'required',
                'driverLicenseIssuedBy' => 'required',
                'driverLicenseId' => 'required',
                'residence' => 'required',
                'category_AM' => 'nullable',
                'category_A1' => 'nullable',
                'category_A2' => 'nullable',
                'category_A' => 'nullable',
                'category_B1' => 'nullable',
                'category_B' => 'nullable',
                'category_BE' => 'nullable',
                'category_C1' => 'nullable',
                'category_C1E' => 'nullable',
                'category_C' => 'nullable',
                'category_CE' => 'nullable',
                'category_D1' => 'nullable',
                'category_D1E' => 'nullable',
                'category_D' => 'nullable',
                'category_DE' => 'nullable',
                'category_F' => 'nullable',
                'category_M' => 'nullable'

            ]);
        }else{
         $validate = request()->validateWithBag('edit_driver', [
        'lname' => 'required',
        'fname' => 'required',
        'contact' => 'required',
        'birthDate' => 'required',
        'placeOfBirth' => 'required',
        'driverLicenseIssuedDate' => 'required',
        'driverLicenseExpirationDate' => 'required',
        'driverLicenseIssuedBy' => 'required',
        'driverLicenseId' => 'required|unique:drivers',
        'residence' => 'required',
        'category_AM' => 'nullable',
        'category_A1' => 'nullable',
        'category_A2' => 'nullable',
        'category_A' => 'nullable',
        'category_B1' => 'nullable',
        'category_B' => 'nullable',
        'category_BE' => 'nullable',
        'category_C1' => 'nullable',
        'category_C1E' => 'nullable',
        'category_C' => 'nullable',
        'category_CE' => 'nullable',
        'category_D1' => 'nullable',
        'category_D1E' => 'nullable',
        'category_D' => 'nullable',
        'category_DE' => 'nullable',
        'category_F' => 'nullable',
        'category_M' => 'nullable'
        
        ]);
        }
        

        

        $driver->update($validate);

        return redirect(route('drivers.show', $driver))->with('crudMessage', 'Vozač uspešno izmenjen');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();

        return redirect(route('drivers.index'))->with('crudMessage', 'Vozač uspešno obrisan');
    }
}
