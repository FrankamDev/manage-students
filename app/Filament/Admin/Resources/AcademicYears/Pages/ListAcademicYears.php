<?php

namespace App\Filament\Admin\Resources\AcademicYears\Pages;

use App\Filament\Admin\Resources\AcademicYears\AcademicYearResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAcademicYears extends ListRecords
{
 protected static string $resource = AcademicYearResource::class;
 protected static ?string $title = "Toutes les annees";
 protected function getHeaderActions(): array
 {
  return [
   CreateAction::make(),
  ];
 }
}
