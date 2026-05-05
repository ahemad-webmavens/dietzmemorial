<?php
namespace App\Filament\Resources\Pages\Tables;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('slug'),
                IconColumn::make('is_active')->boolean(),
            ])
            ->defaultSort('id', 'desc');
    }
}
