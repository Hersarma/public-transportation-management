<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        'residence' => 'required'
        ]);

        $validateCategories = request()->validateWithBag('create_driver_categories', [
            'items' => 'required'
            
        ]);

        $driver = Driver::create($validate);

        foreach($request->items as $category) {
            $driver->driverCategories()->create($category);
        }

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        //
    }
}
