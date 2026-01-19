<?php

namespace App\Filament\Admin\Resources\Teachers\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TeacherForm
{
 public static function configure(Schema $schema): Schema
 {
  return $schema
   ->components([
    TextInput::make('first_name')
     ->label('Prénom')
     ->required()
     ->maxLength(50),

    TextInput::make('last_name')
     ->label('Nom')
     ->required()
     ->maxLength(50),

    TextInput::make('email')
     ->label('Email')
     ->email()
     ->required()
     ->unique(ignoreRecord: true),

    TextInput::make('phone')
     ->label('Téléphone')
     ->required()
     ->maxLength(20),

    Select::make('specialty_id')
     ->relationship('specialty', 'name')
     ->label('Spécialité')
     ->required()
     ->searchable()
     ->preload(),
   ]);
 }
}
