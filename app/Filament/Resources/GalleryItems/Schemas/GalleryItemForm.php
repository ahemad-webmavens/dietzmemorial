<?php
namespace App\Filament\Resources\GalleryItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title (optional)'),

                FileUpload::make('image')
                    ->image()
                    ->required()
                    ->disk('public')
                    ->directory('gallery')
                    ->visibility('public'),

                Select::make('category')
                    ->required()
                    ->options([
                        'upright' => 'Upright',
                        'flat'    => 'Flat',
                        'bevel'   => 'Bevel',
                        'slant'   => 'Slant',
                        'bronze'  => 'Bronze',
                        'custom'  => 'Custom',
                    ]),

                TextInput::make('alt_text')
                    ->label('Alt Text (SEO important)'),

                TextInput::make('order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
