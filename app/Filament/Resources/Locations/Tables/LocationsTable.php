<?php
namespace App\Filament\Resources\Locations\Tables;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class LocationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('city'),
                TextColumn::make('phone'),
                IconColumn::make('is_active')->boolean(),
            ])
            ->defaultSort('id', 'desc');
    }
}
