<?php

namespace App\Filament\Admin\Resources\Reports\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReportsTable
{
 public static function configure(Table $table): Table
 {
  return $table
   ->columns([
    TextColumn::make('student.matricule')->label('Matricule')->searchable(),
    TextColumn::make('student.name')->label('Étudiant'),
    TextColumn::make('academicYear.libelle')->label('Année'),
    TextColumn::make('semester')->label('Semestre'),
    TextColumn::make('moyenne')->numeric(2),
    BadgeColumn::make('decision')->colors([
     'success' => 'ADMIS',
     'warning' => 'AJOURNÉ',
     'danger' => 'ECHEC',
    ]),

    TextColumn::make('mention'),
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
