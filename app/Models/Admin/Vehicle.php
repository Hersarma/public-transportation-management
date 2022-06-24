<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon;

class Vehicle extends Model
{
    use HasFactory;

    protected $dates = [
        'firstRegistrationDate',
        'trafficLicenseIssuedDate',
        'trafficLicenseExpirationDate'
    ];

    protected $fillable = [
        'registrationPlate', 
        'firstRegistrationDate', 
        'trafficLicenseIssuedDate', 
        'fname', 
        'lname', 
        'residenceAddress',
        'vehicleManufacturer',
        'vehicleModel',
        'year',
        'chassisNumber',
        'allowedWeight',
        'weight',
        'trafficLicenseExpirationDate',
        'cylinderCapacity',
        'horsepower',
        'fuleType',
        'seatingCapacity',
        'standingCapacity',
        'currentMileage'
    ];

}
