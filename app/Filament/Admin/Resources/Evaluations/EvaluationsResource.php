<?php

namespace App\Filament\Admin\Resources\Evaluations;

use App\Filament\Admin\Resources\Evaluations\Pages\CreateEvaluations;
use App\Filament\Admin\Resources\Evaluations\Pages\EditEvaluations;
use App\Filament\Admin\Resources\Evaluations\Pages\ListEvaluations;
use App\Filament\Admin\Resources\Evaluations\Schemas\EvaluationsForm;
use App\Filament\Admin\Resources\Evaluations\Tables\EvaluationsTable;
use App\Models\Evaluations;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EvaluationsResource extends Resource
{
    protected static ?string $model = Evaluations::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return EvaluationsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EvaluationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEvaluations::route('/'),
            'create' => CreateEvaluations::route('/create'),
            'edit' => EditEvaluations::route('/{record}/edit'),
        ];
    }
}
