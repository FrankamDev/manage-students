<?php

namespace App\Filament\Admin\Resources\AcademicYears\Pages;

use App\Filament\Admin\Resources\AcademicYears\AcademicYearResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAcademicYear extends ViewRecord
{
 protected static string $resource = AcademicYearResource::class;

 protected function getHeaderActions(): array
 {
  return [
   // EditAction::make(),

   Action::make('back')
    ->label('Retour')
    ->url(AcademicYearResource::getUrl('index'))
    ->color('success')
    ->icon('heroicon-o-arrow-left')
  ];
 }
}
