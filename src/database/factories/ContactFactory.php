<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'gender' => $this->faker->randomElement,
            'email' => $this->faker->safeEmail,
            'tell' => $this->faker->phoneNumber(),
            'address' => $this->faker->address,
            'building' => $this->faker->secondaryAddress(),
            'select' => $this->faker->shuffle(),
            'detail' => $this->faker->sentences(),
        ];
    }
}
