<?php

namespace Database\Seeders;

use App\Models\SuperheroeMission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperheroeMissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SuperheroeMission::factory()->count(7)->create();
    }
}
