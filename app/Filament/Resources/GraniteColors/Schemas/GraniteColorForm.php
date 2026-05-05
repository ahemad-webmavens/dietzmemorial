<?php
namespace App\Filament\Resources\GraniteColors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GraniteColorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),

                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('granite-colors')
                    ->visibility('public'),

                Textarea::make('description')
                    ->rows(3),

                Toggle::make('is_active')
                    ->default(true),
            ]);
    }
}
