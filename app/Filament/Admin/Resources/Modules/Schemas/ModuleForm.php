<?php

namespace App\Filament\Admin\Resources\Modules\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ModuleForm
{
 public static function configure(Schema $schema): Schema
 {
  return $schema
   ->components([

    Select::make('specialty_id')
     ->relationship('specialty', 'name')
     ->label('Spécialité')
     ->required()
     ->searchable()
     ->preload(),

    TextInput::make('code')
     ->required(),

    TextInput::make('name')
     ->required(),

    TextInput::make('coefficient')
     ->numeric()
     ->required(),

    TextInput::make('sequence')
     ->numeric()
     ->required(),

   ]);
 }
}
