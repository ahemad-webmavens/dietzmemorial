<?php

namespace App\Filament\Resources\GraniteColors;

use App\Filament\Resources\GraniteColors\Pages\CreateGraniteColor;
use App\Filament\Resources\GraniteColors\Pages\EditGraniteColor;
use App\Filament\Resources\GraniteColors\Pages\ListGraniteColors;
use App\Filament\Resources\GraniteColors\Schemas\GraniteColorForm;
use App\Filament\Resources\GraniteColors\Tables\GraniteColorsTable;
use App\Models\GraniteColor;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GraniteColorResource extends Resource
{
    protected static ?string $model = GraniteColor::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return GraniteColorForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GraniteColorsTable::configure($table);
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
            'index' => ListGraniteColors::route('/'),
            'create' => CreateGraniteColor::route('/create'),
            'edit' => EditGraniteColor::route('/{record}/edit'),
        ];
    }
}
