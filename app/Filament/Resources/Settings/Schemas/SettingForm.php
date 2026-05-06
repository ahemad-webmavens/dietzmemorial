<?php
namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('key')
                    ->options([
                        'site_name'  => 'Site Name',
                        'phone'      => 'Phone',
                        'waco_phone' => 'Waco Phone',
                        'nb_phone'   => 'New Braunfels Phone',
                        'email'      => 'Email',
                        'logo'       => 'Logo',
                        'favicon'    => 'Favicon',
                    ])
                    ->required()
                    ->searchable()
                    ->live(),

                TextInput::make('value')
                    ->label('Value')
                    ->visible(fn($get) =>
                        ! in_array($get('key'), ['logo', 'favicon'])
                    ),

                FileUpload::make('file_value')
                    ->label('Upload File')
                    ->directory('settings')
                    ->disk('public')
                    ->image()
                    ->visible(fn($get) =>
                        in_array($get('key'), ['logo', 'favicon'])
                    )
                    ->afterStateUpdated(fn($state, $set) =>
                        $set('value', $state)
                    )
                    ->live(),

            ]);
    }
}
