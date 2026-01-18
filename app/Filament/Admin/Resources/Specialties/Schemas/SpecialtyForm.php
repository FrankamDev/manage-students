<?php

namespace App\Filament\Admin\Resources\Specialties\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SpecialtyForm
{
 public static function configure(Schema $schema): Schema
 {
  return $schema
   ->components([
    TextInput::make('code')
     ->label('Code')
     ->required()
     ->unique(ignoreRecord: true)
     ->maxLength(20),
    TextInput::make('name')
     ->label('Nom')
     ->required()
     ->maxLength(100),
    Textarea::make('description')
     ->label('Description')
     ->nullable()
     ->maxLength(500),
   ]);
 }
}
