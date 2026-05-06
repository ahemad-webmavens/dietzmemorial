<?php
namespace App\Filament\Resources\Settings\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key')
                    ->searchable(),
                TextColumn::make('value')
                    ->label('Value')
                    ->limit(50)
                    ->formatStateUsing(fn($state, $record) =>
                        in_array($record->key, ['logo', 'favicon'])
                            ? '<img src="' . asset('storage/' . $state) . '" style="height:40px; width:auto; object-fit:contain;">'
                            : $state
                    )
                    ->html(),
            ]);
    }
}
