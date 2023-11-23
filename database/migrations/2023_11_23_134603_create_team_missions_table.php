<?php

use App\Models\Mission;
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
        Schema::create('team_missions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Team::class)->constrained();
            $table->foreignIdFor(Mission::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_missions');
    }
};
