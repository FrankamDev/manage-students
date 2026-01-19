<?php

namespace App\Filament\Admin\Resources\Reports;

use Filament\Forms\Form;
use App\Filament\Admin\Resources\Reports\Pages\CreateReport;
use App\Filament\Admin\Resources\Reports\Pages\EditReport;
use App\Filament\Admin\Resources\Reports\Pages\ListReports;
use App\Filament\Admin\Resources\Reports\Schemas\ReportForm;
use App\Filament\Admin\Resources\Reports\Tables\ReportsTable;
use App\Models\Report;
use BackedEnum;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReportResource extends Resource
{
 protected static ?string $model = Report::class;

 protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

 public static function form(Schema $schema): Schema
 {
  return ReportForm::configure($schema);
 }

 public static function table(Table $table): Table
 {
  // return ReportsTable::configure($table);

  return $table->columns([
   TextColumn::make('student.matricule')->label('Matricule')->searchable(),
   TextColumn::make('student.name')->label('Étudiant')->searchable(),
   TextColumn::make('academicYear.libelle')->label('Année')->searchable(),
   TextColumn::make('semester')->label('Semestre'),
   TextColumn::make('average')->label('Moyenne')->numeric(2),
   BadgeColumn::make('decision')->colors([
    'success' => 'ADMIS',
    'warning' => 'AJOURNÉ',
    'danger' => 'ECHEC',
   ]),
   TextColumn::make('mention')->label('Mention'),
  ]);
 }
 public static function canCreate(): bool
 {
  return false;
 }

 public static function getRelations(): array
 {
  return [
   //
  ];
 }

 public static function getPages(): array
 {
  return [
   'index' => ListReports::route('/'),
   'create' => CreateReport::route('/create'),
   'edit' => EditReport::route('/{record}/edit'),
  ];
 }
}
