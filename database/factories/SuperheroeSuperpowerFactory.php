<?php

namespace Database\Factories;

use App\Models\SuperheroeSuperpower;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuperheroeSuperpower>
 */
class SuperheroeSuperpowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = SuperheroeSuperpower::class;

    public function definition(): array
    {
        return [
            'superheroe_id' => function () {
                return \App\Models\Superheroe::factory()->create()->id;
            },
            'superpower_id' => function () {
                return \App\Models\Superpower::factory()->create()->id;
            },
            'level' => $this->faker->numberBetween(1, 10),
        ];
    }
}
