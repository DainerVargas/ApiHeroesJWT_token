<?php

namespace Database\Factories;

use App\Models\SuperheroeTeam;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuperheroeTeam>
 */
class SuperheroeTeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = SuperheroeTeam::class;

    public function definition(): array
    {
        return [
            'superheroe_id' => function () {
                return \App\Models\Superheroe::factory()->create()->id;
            },
            'team_id' => function () {
                return \App\Models\Team::factory()->create()->id;
            },
        ];
    }
}
