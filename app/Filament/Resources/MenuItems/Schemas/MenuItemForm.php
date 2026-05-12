<?php
namespace App\Filament\Resources\MenuItems\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MenuItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('label')
                    ->required(),

                TextInput::make('url')
                    ->required(),

                TextInput::make('order')
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->default(true)
                    ->inline(false)
                    ->label('Is Active')
                    ->columnSpan(1)
                    ->extraFieldWrapperAttributes([
                        'style' => 'padding-top: 10px;',
                    ]),

            ]);
    }
}
