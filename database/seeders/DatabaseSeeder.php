<?php

namespace Database\Seeders;

use App\Models\Admin\Driver;
use App\Models\Admin\DriverCategories;
use App\Models\Admin\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);
        
        Vehicle::factory(35)->create();
        Driver::factory(35)->create()->each(function($driver){
            DriverCategories::create([
                'driver_id' => $driver->id,
                'categories' => 'B'
            ]);
          
        });
        
    }
}
