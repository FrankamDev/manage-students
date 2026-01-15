<?php

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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();

            $table->foreignId('specialty_id')
                ->constrained('specialties')
                ->cascadeOnDelete();
            $table->string('code');
            $table->string('name');
            $table->unsignedTinyInteger('coefficient');
            $table->unsignedTinyInteger('module');

            $table->timestamps();

            // Contraintes métier
            $table->unique(['specialty_id', 'code']);
            $table->unique(['specialty_id', 'module']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
