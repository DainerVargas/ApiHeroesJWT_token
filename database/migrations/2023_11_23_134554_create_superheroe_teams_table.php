<?php

use App\Models\Superheroe;
use App\Models\Team;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('superheroe_teams', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Superheroe::class)->constrained();
            $table->foreignIdFor(Team::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroe_teams');
    }
};
