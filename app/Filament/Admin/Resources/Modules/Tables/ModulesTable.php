<?php

namespace App\Filament\Admin\Resources\Modules\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ModulesTable
{
 public static function configure(Table $table): Table
 {
  return $table
   ->columns([
    TextColumn::make('code')
     ->searchable()->sortable(),
    TextColumn::make('name')->label('Nom')->searchable(),
    TextColumn::make('specialty.name')->label('Spécialité')->sortable(),
    TextColumn::make('coefficient')->sortable(),
    TextColumn::make('sequence')->sortable(),
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
