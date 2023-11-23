<?php

namespace Database\Factories;

use App\Models\Mission;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mission>
 */
class MissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Mission::class;
     
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->word,
            'description' => $this->faker->sentence,
            'type' => $this->faker->randomElement(['MR', 'MSU']),

        ];
    }
}
