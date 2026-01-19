<?php

namespace App\Filament\Admin\Resources\AcademicYears\Pages;

use App\Filament\Admin\Resources\AcademicYears\AcademicYearResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAcademicYear extends CreateRecord
{
 protected static string $resource = AcademicYearResource::class;

 protected function getRedirectUrl(): string
 {
  return $this->getResource()::getUrl('index');
 }
}
