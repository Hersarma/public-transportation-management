<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Drivers\DriversHomeController;
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

Route::group(['middleware' => 'auth', 'namespace' => 'drivers'], function (){

    Route::get('/', [DriversHomeController::class, 'index'])->name('homeDrivers');
    Route::get('/dashboard', [DriversHomeController::class, 'index'])->name('homeDrivers');
});
Route::group(['middleware' => ['auth', 'role:admin']], function (){
    Route::get('/admin', [AdminHomeController::class, 'index'])->name('homeAdmin');
});
require __DIR__.'/auth.php';
