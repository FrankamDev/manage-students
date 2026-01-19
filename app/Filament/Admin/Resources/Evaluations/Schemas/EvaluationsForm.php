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
     ->required()
     ->live(),

    Select::make('module_id')
     ->relationship('module', 'name')
     ->live()
     ->required(),

    Select::make('academic_year_id')
     ->relationship('academicYear', 'libelle')
     ->live()
     ->required(),
    TextInput::make('semester')->numeric()->required()->minValue(1)->maxValue(2)
     ->live(),
    TextInput::make('note')->numeric()->required()->minValue(0)->maxValue(20)
     ->live(),
   ]);
 }
}
