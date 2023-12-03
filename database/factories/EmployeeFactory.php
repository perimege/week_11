<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker=Faker::create('tr_TR');
        return [
            'name'=>$faker->name(),
            'phone'=>$faker->phoneNumber(),
            'color'=>$faker->colorName(),
            'address'=>$faker->address()
        ];
    }
}
