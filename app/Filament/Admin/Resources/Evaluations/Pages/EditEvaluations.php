<?php

namespace App\Filament\Admin\Resources\Evaluations\Pages;

use App\Filament\Admin\Resources\Evaluations\EvaluationsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEvaluations extends EditRecord
{
    protected static string $resource = EvaluationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
