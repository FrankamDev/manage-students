<?php

namespace App\Filament\Admin\Resources\Modules\Pages;

use App\Filament\Admin\Resources\Modules\ModuleResource;
use Filament\Resources\Pages\CreateRecord;

class CreateModule extends CreateRecord
{
 protected static string $resource = ModuleResource::class;
 protected static bool $canCreateAnother = false;

 protected function getRedirectUrl(): string
 {
  return $this->getResource()::getUrl('index');
 }
}
