<?php

namespace App\Filament\Admin\Resources\Evaluations\Pages;

use App\Filament\Admin\Resources\Evaluations\EvaluationsResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEvaluation extends ViewRecord
{
 protected static string $resource = EvaluationsResource::class;

 protected function getHeaderActions(): array
 {
  return [
   // EditAction::make(),
   Action::make('back')
    ->label('Retour')
    ->url(EvaluationsResource::getUrl('index'))
    ->color('success')
    ->icon('heroicon-o-arrow-left')
  ];
 }
}
