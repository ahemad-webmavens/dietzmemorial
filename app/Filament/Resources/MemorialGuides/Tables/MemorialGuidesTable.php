<?php
namespace App\Filament\Resources\MemorialGuides\Tables;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MemorialGuidesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('featured_image'),

                TextColumn::make('title')
                    ->searchable(),

                TextColumn::make('slug'),

                IconColumn::make('is_active')
                    ->boolean(),

            ]);
    }
}
