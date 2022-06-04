<?php

namespace App\Http\Controllers\drivers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DriversHomeController extends Controller
{
    public function index() {
        return view('drivers.index');
    }
    
}
