<?php

namespace App\Filament\Admin\Resources\Evaluations\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EvaluationsTable
{
 public static function configure(Table $table): Table
 {
  return $table
   ->columns([
    TextColumn::make('student.matricule')->label('Matricule')->searchable(),
    TextColumn::make('module.name')->label('Module')->sortable(),
    TextColumn::make('academicYear.libelle')->label('Année')->sortable(),
    TextColumn::make('semester')->label('Semestre'),
    TextColumn::make('note')->sortable(),
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
