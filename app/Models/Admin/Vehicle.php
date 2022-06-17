<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'registrationPlate', 
        'firstRegistrationDate', 
        'trafficLicenseIssuedDate', 
        'fname', 
        'lname', 
        'residenceAddress',
        'vehicleManufacturer',
        'vehicleModel',
        'chassisNumber',
        'allowedWeight',
        'weight',
        'trafficLicenseExpirationDate',
        'cylinderCapacity',
        'horsepower',
        'fuleType',
        'seatingCapacity',
        'standingCapacity'
    ];
}
