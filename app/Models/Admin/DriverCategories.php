<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverCategories extends Model
{
    use HasFactory;

    protected $fillable=['categories'];

    public function driver() {

        return $this->belongsTo(Driver::class);
    }
}
