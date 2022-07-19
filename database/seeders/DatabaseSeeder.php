<?php

namespace Database\Seeders;

use App\Models\Admin\Driver;
use App\Models\Admin\DriverCategories;
use App\Models\Admin\Vehicle;
use App\Models\Admin\Vignette;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        
        Vehicle::factory(35)->create()->each(function($vehicle){
            Vignette::create([
                'vehicle_id' => $vehicle->id,
                'purchase_date' => '7/13/2022',
                'expirationDate' => '7/20/2022',
                'country' => 'Austrija',
                'price' => 200
            ]);
        });
        Driver::factory(35)->create();
        
    }
}
