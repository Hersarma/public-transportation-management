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
        'residence'
    ];

    public function driverCategories() {

        return $this->hasMany(DriverCategories::class);
    }
}
