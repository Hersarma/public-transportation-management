<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Drivers\DriversHomeController;
use App\Http\Controllers\GpsController;
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
    Route::get('/', [DriversHomeController::class, 'index'])->name('homeDrivers');
    Route::get('/dashboard', [DriversHomeController::class, 'index'])->name('homeDrivers');
});


Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('/admin', [AdminHomeController::class, 'index'])->name('homeAdmin');

    /*Vehicles*/
    Route::resource('vehicles', VehicleController::class);

    /*GPS*/
    Route::get('/gps', [GpsController::class, 'index'])->name('gps');
});

require __DIR__.'/auth.php';
