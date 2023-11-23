<?php

namespace Database\Factories;

use App\Models\Superheroe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Superheroe>
 */
class SuperheroeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Superheroe::class;
     
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->name,
            'year' => $this->faker->year,
            'planetOrigin' => $this->faker->randomElement(['Earth', $this->faker->word])
        ];
    }
}
