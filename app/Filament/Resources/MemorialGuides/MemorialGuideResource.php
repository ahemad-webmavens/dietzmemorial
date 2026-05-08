<?php

namespace App\Filament\Resources\MemorialGuides;

use App\Filament\Resources\MemorialGuides\Pages\CreateMemorialGuide;
use App\Filament\Resources\MemorialGuides\Pages\EditMemorialGuide;
use App\Filament\Resources\MemorialGuides\Pages\ListMemorialGuides;
use App\Filament\Resources\MemorialGuides\Schemas\MemorialGuideForm;
use App\Filament\Resources\MemorialGuides\Tables\MemorialGuidesTable;
use App\Models\MemorialGuide;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MemorialGuideResource extends Resource
{
    protected static ?string $model = MemorialGuide::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return MemorialGuideForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MemorialGuidesTable::configure($table);
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
            'index' => ListMemorialGuides::route('/'),
            'create' => CreateMemorialGuide::route('/create'),
            'edit' => EditMemorialGuide::route('/{record}/edit'),
        ];
    }
}
