<?php
namespace App\Filament\Resources\ContactSubmissions\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactSubmissionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('location.name')
                    ->label('Location'),

                TextColumn::make('name')
                    ->searchable(),

                TextColumn::make('email'),

                TextColumn::make('phone'),

                TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
