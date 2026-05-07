<?php

namespace App\Filament\Resources\PageSectionItems;

use App\Filament\Resources\PageSectionItems\Pages\CreatePageSectionItem;
use App\Filament\Resources\PageSectionItems\Pages\EditPageSectionItem;
use App\Filament\Resources\PageSectionItems\Pages\ListPageSectionItems;
use App\Filament\Resources\PageSectionItems\Schemas\PageSectionItemForm;
use App\Filament\Resources\PageSectionItems\Tables\PageSectionItemsTable;
use App\Models\PageSectionItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PageSectionItemResource extends Resource
{
    protected static ?string $model = PageSectionItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return PageSectionItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PageSectionItemsTable::configure($table);
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
            'index' => ListPageSectionItems::route('/'),
            'create' => CreatePageSectionItem::route('/create'),
            'edit' => EditPageSectionItem::route('/{record}/edit'),
        ];
    }
}
