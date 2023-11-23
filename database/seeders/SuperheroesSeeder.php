<?php

namespace Database\Seeders;

use App\Models\Superheroe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperheroesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Superheroe::factory()->count(10)->create();
    }
}
