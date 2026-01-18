<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
 public function up(): void
 {
  // Vérifie si la table n'existe pas avant de la créer
  if (!Schema::hasTable('reports')) {
   Schema::create('reports', function (Blueprint $table) {
    $table->id();
    $table->foreignId('student_id')->constrained()->onDelete('cascade');
    $table->foreignId('academic_year_id')->constrained()->onDelete('cascade');
    $table->decimal('average', 5, 2)->nullable();
    $table->text('remark')->nullable();
    $table->timestamps();

    $table->unique(['student_id', 'academic_year_id'], 'unique_report');
   });
  }
 }

 public function down(): void
 {
  Schema::dropIfExists('reports');
 }
};
