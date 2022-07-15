<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vignette extends Model
{
    use HasFactory;

     protected $dates = [
        'purchase_date',
        'expirationDate'
    ];

    protected $fillable=['purchase_date', 'country', 'price', 'expirationDate', 'vehicle_id'];

    public function vehicle() {

        return $this->belongsTo(Vehicle::class);
    }
}
