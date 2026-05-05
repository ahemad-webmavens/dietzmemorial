<?php
namespace App\Filament\Resources\GalleryItems\Tables;

use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GalleryItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('category'),
                TextColumn::make('order')->sortable(),
            ])
            ->defaultSort('order');
    }
}
