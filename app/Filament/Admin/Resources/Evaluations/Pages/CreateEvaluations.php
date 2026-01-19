<?php

namespace App\Filament\Admin\Resources\Evaluations\Pages;

use App\Filament\Admin\Resources\Evaluations\EvaluationsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEvaluations extends CreateRecord
{
 protected static string $resource = EvaluationsResource::class;

 protected static bool $canCreateAnother = false;

 protected function getRedirectUrl(): string
 {
  return $this->getResource()::getUrl('index');
 }
}
