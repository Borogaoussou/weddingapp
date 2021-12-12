<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'key'=>$this->faker->randomNumber(9),
            'name'=>$this->faker->name,
            'telephone'=>$this->faker->phoneNumber,
            'table'=>$this->faker->buildingNumber,
            'qrcode'=>null,
            'status'=>0,
        ];
    }
}
