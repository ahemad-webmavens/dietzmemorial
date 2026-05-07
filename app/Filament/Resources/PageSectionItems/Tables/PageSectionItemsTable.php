<?php
namespace App\Filament\Resources\PageSectionItems\Tables;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PageSectionItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('image'),

                TextColumn::make('section.type')
                    ->label('Section'),

                TextColumn::make('title'),

                IconColumn::make('is_active')
                    ->boolean(),

            ])
            ->defaultSort('order');
    }
}
