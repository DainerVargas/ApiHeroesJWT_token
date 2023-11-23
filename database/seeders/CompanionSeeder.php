<?php

namespace Database\Seeders;

use App\Models\Companion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Companion::factory()->count(6)->create();
    }
}
