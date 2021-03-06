<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\SearchController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\VehicleRegistrationController;
use App\Http\Controllers\Admin\VignetteController;
use App\Http\Controllers\Drivers\DriversHomeController;
use App\Http\Controllers\GpsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/dashboard', [DriversHomeController::class, 'index'])->name('homeDrivers');

    /*GPS*/
    Route::get('/gpsDrivers', [GpsController::class, 'indexDrivers'])->name('gpsDrivers');
});


Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('/admin', [AdminHomeController::class, 'index'])->name('homeAdmin');

    /*Vehicles*/
    Route::resource('vehicles', VehicleController::class);

    /*Vehicle Registration*/
    Route::resource('vehicleRegistrations', VehicleRegistrationController::class);

    /*Vignette*/
    Route::resource('vignettes', VignetteController::class);

    /*Drivers*/
    Route::resource('drivers', DriverController::class);

    /*Clients*/
    Route::resource('clients', ClientController::class);

    /*GPS*/
    Route::get('/gpsAdmin', [GpsController::class, 'indexAdmin'])->name('gpsAdmin');

    /*Search*/
    Route::get('searchVehicle', [SearchController::class, 'searchVehicle']);
    Route::get('searchDriver', [SearchController::class, 'searchDriver']);
    Route::get('searchVignette', [SearchController::class, 'searchVignette']);
    Route::get('searchClient', [SearchController::class, 'searchClient']);
   

});

require __DIR__.'/auth.php';
