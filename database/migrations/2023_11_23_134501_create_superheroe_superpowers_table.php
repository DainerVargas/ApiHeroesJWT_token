<?php

use App\Models\Superheroe;
use App\Models\Superpower;
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
        Schema::create('superheroe_superpowers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Superheroe::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Superpower::class)->constrained()->cascadeOnDelete();
            $table->string('level');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroe_superpowers');
    }
};
