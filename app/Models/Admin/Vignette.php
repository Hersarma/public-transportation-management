<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vignette extends Model
{
    use HasFactory;

     protected $dates = [
        'purchase_date',
        'expiration_date'
    ];

    protected $fillable=['purchase_date', 'country', 'price', 'expiration_date', 'vehicle_id', 'receipt'];

    public function vehicle() {

        return $this->belongsTo(Vehicle::class);
    }
}
