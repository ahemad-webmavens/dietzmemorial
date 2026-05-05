<?php
namespace App\Filament\Resources\Locations\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('address')->required(),
                TextInput::make('city')->required(),
                TextInput::make('state')->required(),
                TextInput::make('zip')->required(),

                TextInput::make('phone'),
                TextInput::make('email'),

                Textarea::make('map_embed')
                    ->label('Google Map Embed Code'),

                TextInput::make('hours'),

                Toggle::make('is_active')->default(true),
            ]);
    }
}
