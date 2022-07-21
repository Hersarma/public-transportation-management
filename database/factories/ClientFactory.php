<?php

namespace Database\Factories;

use App\Models\Admin\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     protected $model = Client::class;
    public function definition()
    {
        return [
        'fname' => $this->faker->firstName(),
        'lname' => $this->faker->lastName(),
        'contact' => $this->faker->phoneNumber(),
        'personalIdNumber' => $this->faker->unique()->randomNumber(9, true),
        'personalId' => $this->faker->unique()->randomNumber(9, true),
        'passportId' => $this->faker->unique()->randomNumber(9, true)
        ];
    }
}
