<?php

namespace App\Models\Admin;

use Database\Factories\ClientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return ClientFactory::new();
    }

    protected $fillable = ['fname', 'lname', 'personalIdNumber', 'personalId', 'passportId', 'contact'];
}
