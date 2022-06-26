<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Driver;
use App\Models\Admin\Vehicle;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchVehicle(Request $request) {

        $query = $request->get('query');
        
        $query = str_replace(" ", "%", $query);
        $vehicles = Vehicle::
        where('registrationPlate', 'like', '%' . $query . '%')
        ->orWhere('vehicleManufacturer', 'like', '%' . $query . '%')
        ->orderBy('vehicleManufacturer', 'asc')->simplePaginate(10);
        
        return view('admin.vehicles.search', compact('vehicles'))->render();

    }

     public function searchDriver(Request $request)
    {
        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $drivers = Driver::with('driverCategories')->whereHas('driverCategories',function($q) use($query){
        $q->where('fname', 'like', "%{$query}%")
        ->orWhere('driverLicenseId', 'like', "%{$query}%")
        ->orWhere('lname', 'like', "%{$query}%");
        })->orderBy('fname', 'asc')->simplePaginate(10);
        
        return view('admin.drivers.search', compact('drivers'))->render();
    }


}
