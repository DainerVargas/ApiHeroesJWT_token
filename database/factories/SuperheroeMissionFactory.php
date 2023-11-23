<?php

namespace Database\Factories;

use App\Models\SuperheroeMission;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuperheroeMission>
 */
class SuperheroeMissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


     protected $model = SuperheroeMission::class;

    public function definition(): array
    {
        return [
            'superheroe_id' => function () {
                return \App\Models\Superheroe::factory()->create()->id;
            },
            'mission_id' => function () {
                return \App\Models\Mission::factory()->create()->id;
            },
        ];
    }
}
