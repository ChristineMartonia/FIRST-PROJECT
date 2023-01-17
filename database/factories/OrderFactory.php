<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'total' => $this->faker->randomFloat(2, 100, 10000),
            'drop_off' => $this->faker->streetAddress,
            'shipping_fee' => $this->faker->randomFloat(2, 400, 10000),
        ];
    }
}
