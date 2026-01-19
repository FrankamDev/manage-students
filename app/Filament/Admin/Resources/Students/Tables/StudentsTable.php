<?php

namespace App\Filament\Admin\Resources\Students\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StudentsTable
{
 public static function configure(Table $table): Table
 {
  return $table
   ->columns([
    TextColumn::make('first_name')->label('Prénom')->searchable(),
    TextColumn::make('last_name')->label('Nom')->searchable(),
    TextColumn::make('email')->searchable(),
    TextColumn::make('phone'),
    TextColumn::make('specialty.name')->label('Spécialité')->sortable(),
    TextColumn::make('created_at')->dateTime()->toggleable(isToggledHiddenByDefault: true),

   ])
   ->filters([
    //
   ])
   ->recordActions([
    EditAction::make(),
   ])
   ->toolbarActions([
    BulkActionGroup::make([
     DeleteBulkAction::make(),
    ]),
   ]);
 }
}
