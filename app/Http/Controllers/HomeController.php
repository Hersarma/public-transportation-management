<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home() {
    $user = auth()->user();
    if ($user->hasRole('admin')) {
        return redirect(route('homeAdmin'));
    }
    return redirect(route('homeDrivers'));

    }

    
}
