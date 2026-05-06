<?php
namespace App\Filament\Resources\MenuItems\Tables;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MenuItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('label'),

                TextColumn::make('url'),

                TextColumn::make('order'),

                IconColumn::make('is_active')
                    ->boolean(),

            ])
            ->defaultSort('order');
    }
}
