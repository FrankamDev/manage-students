<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Student;
use App\Models\AcademicYear;
use App\Models\Report;
use App\Services\ReportService;

class FillReports extends Command
{
 protected $signature = 'reports:fill';
 protected $description = 'Remplit la table reports avec moyennes, décisions et mentions';

 public function handle()
 {
  $students = Student::all();
  $years = AcademicYear::all();

  foreach ($students as $student) {
   foreach ($years as $year) {
    for ($semester = 1; $semester <= 2; $semester++) {
     $moyenne = ReportService::calculer($student->id, $year->id, $semester);

     Report::updateOrCreate(
      [
       'student_id' => $student->id,
       'academic_year_id' => $year->id,
       'semester' => $semester,
      ],
      [
       'average' => $moyenne,
       'decision' => ReportService::decision($moyenne),
       'mention' => ReportService::mention($moyenne),
      ]
     );
    }
   }
  }

  $this->info('La table reports a été remplie avec succès !');
 }
}
