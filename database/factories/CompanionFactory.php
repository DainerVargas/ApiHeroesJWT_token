<?php

namespace Database\Factories;

use App\Models\Companion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Companion>
 */
class CompanionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Companion::class;

    public function definition(): array
    {
        return [
            'superheroe_id' => function () {
                return \App\Models\Superheroe::factory()->create()->id;
            },
            'name' => $this->faker->name,
        ];
    }
}
