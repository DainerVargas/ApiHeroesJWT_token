<?php

namespace Database\Seeders;

use App\Models\TeamMission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamMissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamMission::factory()->count(6)->create();
    }
}
