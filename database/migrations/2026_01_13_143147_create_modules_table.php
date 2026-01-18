<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
 public function up(): void
 {
  Schema::create('modules', function (Blueprint $table) {
   $table->id();
   $table->foreignId('specialty_id')->constrained()->onDelete('cascade'); // Relation vers Specialty
   $table->string('code')->unique();            // Code unique du module
   $table->string('name');                       // Nom du module
   $table->unsignedTinyInteger('coefficient');  // Coefficient (1 à 5)
   $table->unsignedTinyInteger('sequence');     // Séquence du module
   $table->timestamps();
  });
 }

 public function down(): void
 {
  Schema::dropIfExists('modules');
 }
};
