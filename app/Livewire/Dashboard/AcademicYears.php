<?php

namespace App\Livewire\Dashboard;

use App\Models\AcademicYear;
use Livewire\Component;

class AcademicYears extends Component
{
 public $academicYears = [];
 public $libelle = '';
 public $date_debut = '';
 public $date_fin = '';
 public $is_active = false;
 public $academicYearId = null;

 public function render()
 {
  $this->academicYears = AcademicYear::orderBy('date_debut', 'desc')->get();
  return view('livewire.dashboard.academic-years');
 }
 public $hasError = false;
 public function save()
 {
  $rules = [
   'libelle' => 'required|string|max:255',
   'date_debut' => 'required|date',
   'date_fin' => 'required|date|after_or_equal:date_debut',
   'is_active' => 'boolean',
  ];

  try {
   $validated = $this->validate($rules);

   if ($this->academicYearId) {
    AcademicYear::findOrFail($this->academicYearId)->update($validated);
   } else {
    AcademicYear::create($validated);
   }

   $this->resetFields();
  } catch (\Illuminate\Validation\ValidationException $e) {
   $this->hasError = true; // active la pop-up
   throw $e; // Livewire gère quand même l'affichage des erreurs
  }

  if ($this->academicYearId !== null) {
   $rules['libelle'] .= '|unique:academic_years,libelle,' . (int) $this->academicYearId;
  } else {
   $rules['libelle'] .= '|unique:academic_years,libelle';
  }

  $validated = $this->validate($rules);

  if ($this->academicYearId) {
   AcademicYear::findOrFail($this->academicYearId)->update($validated);
  } else {
   AcademicYear::create($validated);
  }

  $this->resetFields();
 }

 public function edit($id)
 {
  $year = AcademicYear::findOrFail($id);

  $this->academicYearId = $year->id;
  $this->libelle = $year->libelle;
  $this->date_debut = $year->date_debut;
  $this->date_fin = $year->date_fin;
  $this->is_active = $year->is_active;
 }

 public function delete($id)
 {
  AcademicYear::findOrFail($id)->delete();
 }

 private function resetFields()
 {
  $this->libelle = '';
  $this->date_debut = '';
  $this->date_fin = '';
  $this->is_active = false;
  $this->academicYearId = null;
 }
}
