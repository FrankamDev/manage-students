<?php

namespace App\Filament\Admin\Resources\Students\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
 public static function configure(Schema $schema): Schema
 {
  return $schema
   ->components([
    TextInput::make('matricule')->required()->unique(ignoreRecord: true),
    TextInput::make('first_name')->required()->maxLength(50),
    TextInput::make('last_name')->required()->maxLength(50),
    Select::make('academic_year_id')
     ->relationship('academicYear', 'libelle')
     ->required(),
    Select::make('specialty_id')
     ->relationship('specialty', 'name')
     ->required(),
    TextInput::make('email')->email()->nullable(),
    TextInput::make('phone')->nullable(),
   ]);
 }
}
