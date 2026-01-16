<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\AcademicYear;

class AcademicYears extends Component
{
 // Champs du formulaire
 public $libelle;
 public $date_debut;
 public $date_fin;
 public $is_active = false;

 // ID en cours pour modification
 public $academicYearId = null;

 // Liste des années
 public $academicYears = [];

 // Méthode pour charger les années
 public function mount()
 {
  $this->loadAcademicYears();
 }

 public function loadAcademicYears()
 {
  $this->academicYears = AcademicYear::all();
 }

 // Créer ou mettre à jour
 public function save()
 {
  if ($this->academicYearId) {
   AcademicYear::find($this->academicYearId)->update([
    'libelle' => $this->libelle,
    'date_debut' => $this->date_debut,
    'date_fin' => $this->date_fin,
    'is_active' => $this->is_active,
   ]);
  } else {
   AcademicYear::create([
    'libelle' => $this->libelle,
    'date_debut' => $this->date_debut,
    'date_fin' => $this->date_fin,
    'is_active' => $this->is_active,
   ]);
  }

  $this->resetFields();
  $this->loadAcademicYears();
 }

 // Remplir le formulaire pour modification
 public function edit($id)
 {
  $year = AcademicYear::find($id);
  $this->academicYearId = $year->id;
  $this->libelle = $year->libelle;
  $this->date_debut = $year->date_debut;
  $this->date_fin = $year->date_fin;
  $this->is_active = $year->is_active;
 }

 // Supprimer une année
 public function delete($id)
 {
  AcademicYear::find($id)->delete();
  $this->loadAcademicYears();
 }

 // Réinitialiser le formulaire
 private function resetFields()
 {
  $this->libelle = '';
  $this->date_debut = '';
  $this->date_fin = '';
  $this->is_active = false;
  $this->academicYearId = null;
 }

 public function render()
 {
  return view('livewire.dashboard.academic-years');
 }
}
