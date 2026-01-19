<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Module;
use App\Models\AcademicYear;
use App\Models\Evaluation;
use App\Models\Evaluations;
use App\Models\Report;

class FillReportSeeder extends Seeder
{
 public function run(): void
 {
  $students = Student::all();
  $modules = Module::all();
  $years = AcademicYear::all();

  foreach ($students as $student) {
   foreach ($years as $year) {
    for ($semester = 1; $semester <= 2; $semester++) {

     $total = 0;
     $coeff = 0;

     foreach ($modules as $module) {
      // Générer une note aléatoire pour le module
      $note = rand(8, 20);

      // Crée ou met à jour l’évaluation
      Evaluations::updateOrCreate(
       [
        'student_id' => $student->id,
        'module_id' => $module->id,
        'academic_year_id' => $year->id,
        'semester' => $semester,
       ],
       [
        'note' => $note,
       ]
      );

      $total += $note * $module->coefficient;
      $coeff += $module->coefficient;
     }

     $average = $coeff > 0 ? round($total / $coeff, 2) : 0;

     $decision = $average >= 10 ? 'ADMIS' : ($average >= 8 ? 'AJOURNÉ' : 'ECHEC');

     $mention = match (true) {
      $average >= 16 => 'Très Bien',
      $average >= 14 => 'Bien',
      $average >= 12 => 'Assez Bien',
      $average >= 10 => 'Passable',
      default => 'Insuffisant',
     };

     // Remplit ou met à jour le report
     Report::updateOrCreate(
      [
       'student_id' => $student->id,
       'academic_year_id' => $year->id,
       'semester' => $semester,
      ],
      [
       'average' => $average,
       'decision' => $decision,
       'mention' => $mention,
      ]
     );
    }
   }
  }
 }
}
