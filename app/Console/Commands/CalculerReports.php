<?php

namespace App\Console\Commands;

use App\Models\AcademicYear;
use App\Models\Report;
use App\Models\Student;
use App\Services\ReportService;
use Illuminate\Console\Command;

class CalculerReports extends Command
{
 /**
  * The name and signature of the console command.
  *
  * @var string
  */



 protected $signature = 'app:calculer-reports';

 /**
  * The console command description.
  *
  * @var string
  */
 protected $description = 'Command description';

 /**
  * Execute the console command.
  */
 public function handle()
 {
  foreach (Student::all() as $student) {
   foreach (AcademicYear::all() as $year) {
    for ($semester = 1; $semester <= 2; $semester++) {
     $moyenne = ReportService::calculer($student->id, $year->id, $semester);
     Report::updateOrCreate([
      'student_id' => $student->id,
      'academic_year_id' => $year->id,
      'semester' => $semester,
     ], [
      'moyenne' => $moyenne,
      'decision' => ReportService::decision($moyenne),
      'mention' => ReportService::mention($moyenne),
     ]);
    }
   }
  }
 }
}
