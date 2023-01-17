<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'lastname' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'age' => $this->faker->randomDigitNotNull,
            'address_1' => $this->faker->streetAddress,

        ];
    }

    public function device(){
  
    }
}