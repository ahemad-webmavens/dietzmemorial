<?php
namespace App\Filament\Resources\Services\Tables;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('slug'),
                TextColumn::make('order')->sortable(),
                IconColumn::make('is_active')->boolean(),
            ])
            ->defaultSort('order');
    }
}
