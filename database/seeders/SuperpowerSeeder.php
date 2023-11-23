<?php

namespace Database\Seeders;

use App\Models\Superpower;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperpowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Superpower::factory()->count(5)->create();
    }
}
