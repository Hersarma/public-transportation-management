<?php

namespace Database\Factories;

use App\Models\Admin\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     protected $model = Vehicle::class;
    public function definition()
    {
        $vehicleName = [
        
            'Audi',
            'Mercedes',
            'Volkswagen',
            'Opel',
            'BMW',
            'Ford',
            "Skoda",
            'Toyota',
            'Honda'
        ];

        $vehicleModel = [
            'model-1',
            'model-2',
            'model-3',
            'model-4',
            'model-5'
        ];
        return [
           
            'vehicleManufacturer' => $vehicleName[rand(0, count($vehicleName) - 1)],
            'vehicleModel' => $vehicleModel[rand(0, count($vehicleModel) - 1)],
            'registrationPlate' => 'NS'.$this->faker->unique()->randomNumber(3).'-'.Str::random(2),
            'firstRegistrationDate' => $this->faker->date('d-M-Y'),
            'trafficLicenseIssuedDate' => $this->faker->date('d-M-Y'),
            'trafficLicenseExpirationDate' => $this->faker->date('d-M-Y'),
            'fname' => $this->faker->name(),
            'lname' => $this->faker->name(),
            'residenceAddress' => $this->faker->address(),
            'year' => $this->faker->randomNumber(5, true),
            'chassisNumber' => $this->faker->randomNumber(9, true),
            'allowedWeight' => $this->faker->randomNumber(4, true),
            'weight' => $this->faker->randomNumber(4, true),
            'cylinderCapacity' => $this->faker->randomNumber(4, true),
            'horsepower' => $this->faker->randomNumber(3, true),
            'fuleType'  => $this->faker->word(),
            'currentMileage' => $this->faker->randomNumber(6, true)
        ];
    }
}
