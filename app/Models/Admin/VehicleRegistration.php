<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleRegistration extends Model
{
    use HasFactory;

    protected $dates = [
        'purchase_date',
        'expiration_date'
    ];

    protected $fillable=['purchase_date', 'price', 'expiration_date', 'vehicle_id'];

    public function vehicle() {

        return $this->belongsTo(Vehicle::class);
    }
}
