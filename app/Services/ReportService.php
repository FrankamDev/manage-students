<?php

namespace App\Services;

use App\Models\Evaluations;

class ReportService
{
 /**
  * Create a new class instance.
  */

 public static function calculer($studentId, $yearId, $semester)
 {
  $notes = Evaluations::where('student_id', $studentId)
   ->where('academic_year_id', $yearId)
   ->where('semester', $semester)
   ->with('module')
   ->get();

  $total = 0;
  $coeff = 0;

  foreach ($notes as $note) {
   $total += $note->note * $note->module->coefficient;
   $coeff += $note->module->coefficient;
  }

  if ($coeff === 0) return 0;

  return round($total / $coeff, 2);
 }

 public static function decision($moyenne)
 {
  if ($moyenne >= 10) return 'ADMIS';
  if ($moyenne >= 8) return 'AJOURNÉ';
  return 'ECHEC';
 }

 public static function mention($moyenne)
 {
  return match (true) {
   $moyenne >= 16 => 'Très Bien',
   $moyenne >= 14 => 'Bien',
   $moyenne >= 12 => 'Assez Bien',
   $moyenne >= 10 => 'Passable',
   default => 'Insuffisant',
  };
 }
}
