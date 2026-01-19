<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
 use HasFactory;
 protected $fillable = [
  'libelle',
  'date_debut',
  'date_fin',
  'is_active',
 ];

 protected static function booted()
 {
  static::saving(function ($year) {
   if ($year->is_active) {
    AcademicYear::where('is_active', true)
     ->where('id', '!=', $year->id)
     ->update(['is_active' => false]);
   }
  });
 }
}
