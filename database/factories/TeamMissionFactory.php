<?php

namespace Database\Factories;

use App\Models\TeamMission;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMission>
 */
class TeamMissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


     protected $model = TeamMission::class;

    public function definition(): array
    {
        return [
            'team_id' => function () {
                return \App\Models\Team::factory()->create()->id;
            },
            'mission_id' => function () {
                return \App\Models\Mission::factory()->create()->id;
            },
        ];
    }
}
