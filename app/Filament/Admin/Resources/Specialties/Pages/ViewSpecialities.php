<?php

namespace App\Filament\Admin\Resources\Specialties\Pages;

use App\Filament\Admin\Resources\Specialties\SpecialtyResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSpecialities extends ViewRecord
{
 protected static string $resource = SpecialtyResource::class;

 protected function getHeaderActions(): array
 {
  return [
   // EditAction::make(),
   Action::make('retour')
    ->label('Retout')
    ->url(SpecialtyResource::getUrl('index'))
  ];
 }
}
