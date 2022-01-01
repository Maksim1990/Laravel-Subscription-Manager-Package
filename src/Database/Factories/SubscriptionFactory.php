<?php

namespace MaksimN\SubscriptionManager\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    public function definition()
    {
        return [
            'email' => $this->faker->email(),
            'user_id' => 3,
            'description' => $this->faker->realText(300),
        ];
    }
}