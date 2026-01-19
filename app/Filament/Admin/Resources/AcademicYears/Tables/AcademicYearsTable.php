<?php

namespace App\Filament\Admin\Resources\AcademicYears\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AcademicYearsTable
{
 public static function configure(Table $table): Table
 {
  return $table
   ->columns([
    TextColumn::make('libelle')
     ->label('Année')
     ->searchable()
     ->sortable(),

    TextColumn::make('date_debut')
     ->label('Début')
     ->date(),

    TextColumn::make('date_fin')
     ->label('Fin')
     ->date(),

    IconColumn::make('is_active')
     ->label('Active')
     ->boolean(),

    TextColumn::make('created_at')
     ->dateTime()
     ->toggleable(isToggledHiddenByDefault: true),
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
