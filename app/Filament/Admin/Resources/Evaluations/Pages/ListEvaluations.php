<?php

namespace App\Filament\Admin\Resources\Evaluations\Pages;

use App\Filament\Admin\Resources\Evaluations\EvaluationsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEvaluations extends ListRecords
{
    protected static string $resource = EvaluationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
