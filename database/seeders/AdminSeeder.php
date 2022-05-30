<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ]);
        $user = User::create([
            'name' => 'hersarma',
            'email' => 'hersarma@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('SARMADINO2110'), // password
            
        ]);
        $adminUser->assignRole('manager', 'admin');
        $user->assignRole('drivers');
}
}