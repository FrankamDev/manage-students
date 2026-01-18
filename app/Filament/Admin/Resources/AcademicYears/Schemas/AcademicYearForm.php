<?php

namespace App\Filament\Admin\Resources\AcademicYears\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AcademicYearForm
{
 public static function configure(Schema $schema): Schema
 {
  return $schema
   ->components([
    TextInput::make('libelle')
     ->required()
     ->maxLength(50),
    DatePicker::make('date_debut')
     ->required(),
    DatePicker::make('date_fin')
     ->required(),
    Toggle::make('is_active')
     ->label('Année active'),
   ]);
 }
}
