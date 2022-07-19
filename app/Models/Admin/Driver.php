<?php

namespace App\Models\Admin;

use Database\Factories\DriverFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected static function newFactory()
    {
        return DriverFactory::new();
    }
    protected $dates = [
        'birthDate',
        'driverLicenseIssuedDate',
        'driverLicenseExpirationDate'
    ];

    protected $casts = [
    'categories' => 'array'
    ];
    
    protected $fillable=[

        'lname',
        'fname',
        'contact',
        'birthDate',
        'placeOfBirth',
        'driverLicenseIssuedDate',
        'driverLicenseExpirationDate',
        'driverLicenseIssuedBy',
        'driverLicenseId',
        'residence',
        'category_AM',
        'category_A1',
        'category_A2',
        'category_A',
        'category_B1',
        'category_B',
        'category_BE',
        'category_C1',
        'category_C1E',
        'category_C',
        'category_CE',
        'category_D1',
        'category_D1E',
        'category_D',
        'category_DE',
        'category_F',
        'category_M'
    ];

   
}
