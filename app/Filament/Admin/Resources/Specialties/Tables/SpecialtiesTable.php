<?php

namespace App\Filament\Admin\Resources\Specialties\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SpecialtiesTable
{
 public static function configure(Table $table): Table
 {
  return $table
   ->columns([
    TextColumn::make('code')->searchable()->sortable(),
    TextColumn::make('name')->label('Nom')->searchable(),
    TextColumn::make('description')->limit(40),
    TextColumn::make('created_at')->dateTime()->toggleable(isToggledHiddenByDefault: true),

   ])
   ->filters([
    //
   ])
   ->recordActions([
    ViewAction::make(),
    EditAction::make(),
    DeleteAction::make()
   ])
   ->toolbarActions([
    BulkActionGroup::make([
     DeleteBulkAction::make(),
    ]),
   ]);
 }
}
