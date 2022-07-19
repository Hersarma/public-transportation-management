<?php

namespace Database\Factories;

use App\Models\Admin\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Driver::class;
    public function definition()
    {
        return [
        'fname' => $this->faker->firstName(),
        'lname' => $this->faker->lastName(),
        'contact' => $this->faker->phoneNumber(),
        'birthDate' => $this->faker->date('d-M-Y'),
        'placeOfBirth' => $this->faker->state(),
        'driverLicenseIssuedDate' => $this->faker->date('d-M-Y'),
        'driverLicenseExpirationDate' => $this->faker->date('d-M-Y'),
        'driverLicenseIssuedBy' => 'PU U NOVOM SADU',
        'driverLicenseId' => $this->faker->unique()->randomNumber(9, true),
        'residence' => $this->faker->city(),
        'category_B' => '1',
        'category_D' => '1',
        'category_C' => '1',
        'category_F' => '1'
        ];
    }
}
