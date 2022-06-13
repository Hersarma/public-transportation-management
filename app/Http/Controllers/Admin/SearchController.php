<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Vehicle;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchVehicle(Request $request) {

        $query = $request->get('query');
        
        $query = str_replace(" ", "%", $query);
        $vehicles = Vehicle::
        where('registrationPlate', 'like', '%' . $query . '%')->orderBy('registrationPlate', 'asc')->simplePaginate(1);
        
        return view('admin.vehicles.search', compact('vehicles'))->render();

    }
}
