<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;

    public function definition(): array
    {
        return [
            'name'      => $this->faker->name,
            'phone'     => $this->faker->phoneNumber,
            'cpf'       => $this->faker->numerify('##########'),
            'car_plate' => strtoupper($this->faker->bothify('???-####')),
        ];
    }
}
