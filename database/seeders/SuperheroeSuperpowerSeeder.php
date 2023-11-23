<?php

namespace Database\Seeders;

use App\Models\SuperheroeSuperpower;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperheroeSuperpowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SuperheroeSuperpower::factory()->count(9)->create();
    }
}
