<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Client;
use App\Models\Admin\Driver;
use App\Models\Admin\Vehicle;
use App\Models\Admin\Vignette;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchVehicle(Request $request) {

        $query = $request->get('query');
        $url = $request->get('url_name');
       
        $query = str_replace(" ", "%", $query);
        $vehicles = Vehicle::
        where('registrationPlate', 'like', '%' . $query . '%')
        ->orWhere('vehicleManufacturer', 'like', '%' . $query . '%')
        ->orderBy('vehicleManufacturer', 'asc')->simplePaginate(10);
        
        return view('admin.'.$url.'.searchVehicle', compact('vehicles'))->render();

    }

     public function searchDriver(Request $request)
    {
        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $drivers = Driver::
        where('fname', 'like', '%' . $query . '%')
        ->orWhere('lname', 'like', '%' . $query . '%')
        ->orWhere('driverLicenseId', 'like', '%' . $query . '%')
        ->orderBy('fname', 'asc')->simplePaginate(10);
        
        return view('admin.drivers.searchDriver', compact('drivers'))->render();
    }

     public function searchVignette(Request $request) {

        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $vignettes = Vignette::with('vehicle')->whereHas('vehicle',function($q) use($query){
        $q->where('vehicleManufacturer', 'like', "%{$query}%");
        })->orderBy('expirationDate', 'desc')->simplePaginate(10);
        
        return view('admin.vignettes.searchVignette', compact('vignettes'))->render();

    }

    public function searchClient(Request $request) {

        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $clients = Client::where('fname', 'like', '%' .$query. '%')
        ->orWhere('lname', 'like', '%' . $query . '%')
        ->orderBy('fname', 'asc')
        ->simplePaginate(10);

        return view('admin.clients.searchClient', compact('clients'))->render();
    }


}
