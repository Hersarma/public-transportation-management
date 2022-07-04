<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Driver;
use App\Models\Admin\Vehicle;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index() {
        $countVehicles = Vehicle::count();
        $countDrivers = Driver::count();
        return view('admin.index', compact('countVehicles', 'countDrivers'));
    }
}
