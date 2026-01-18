<?php

namespace App\Filament\Admin\Resources\Evaluations\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EvaluationsForm
{
 public static function configure(Schema $schema): Schema
 {
  return $schema
   ->components([
    Select::make('student_id')
     ->relationship('student', 'matricule')
     ->required(),
    Select::make('module_id')
     ->relationship('module', 'name')
     ->required(),
    Select::make('academic_year_id')
     ->relationship('academicYear', 'libelle')
     ->required(),
    TextInput::make('semester')->numeric()->required()->minValue(1)->maxValue(2),
    TextInput::make('note')->numeric()->required()->minValue(0)->maxValue(20),



   ]);
 }
}
