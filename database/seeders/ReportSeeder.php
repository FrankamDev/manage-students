<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\AcademicYear;
use App\Models\Report;
use App\Models\Evaluation;
use App\Models\Evaluations;

class ReportSeeder extends Seeder
{
 public function run(): void
 {
  $students = Student::all();
  $years = AcademicYear::all();

  foreach ($students as $student) {
   foreach ($years as $year) {
    for ($semester = 1; $semester <= 2; $semester++) {
     // Récupère toutes les évaluations de cet étudiant pour cette année et ce semestre
     $evaluations = Evaluations::where('student_id', $student->id)
      ->where('academic_year_id', $year->id)
      ->where('semester', $semester)
      ->with('module')
      ->get();

     $total = 0;
     $coeff = 0;

     foreach ($evaluations as $eval) {
      $total += $eval->note * $eval->module->coefficient;
      $coeff += $eval->module->coefficient;
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

     // Remplit ou met à jour la table reports
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
