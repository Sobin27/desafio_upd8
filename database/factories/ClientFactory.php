<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'cpf' => $this->faker->numerify('##############'),
            'birth_date' => $this->faker->date(),
            'address' => $this->faker->address(),
            'sex' => $this->faker->randomElement(['M', 'F']),
            'city_id' => $this->faker->numberBetween(1, 100),
        ];
    }
}
