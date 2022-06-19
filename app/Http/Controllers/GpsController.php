<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GpsController extends Controller
{
    public function indexAdmin() {
        return view('admin.gps.index');
    }

    public function indexDrivers() {
        return view('drivers.gps.index');
    }
    
}
