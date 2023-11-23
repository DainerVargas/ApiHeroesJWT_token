<?php

namespace Database\Seeders;

use App\Models\SuperheroeTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperheroeTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SuperheroeTeam::factory()->count(3)->create();
    }
}
