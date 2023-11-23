<?php

namespace Database\Factories;

use App\Models\Superpower;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Superpower>
 */
class SuperpowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Superpower::class;
     
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->word,
            'description' => $this->faker->sentence,
        ];
    }
}
