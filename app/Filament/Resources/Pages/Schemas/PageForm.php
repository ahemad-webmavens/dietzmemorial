<?php
namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                Textarea::make('content')
                    ->rows(5),

                FileUpload::make('hero_image')
                    ->image()
                    ->disk('public')
                    ->directory('pages')
                    ->visibility('public'),

                TextInput::make('meta_title'),

                Textarea::make('meta_description'),

                Toggle::make('is_active')
                    ->default(true),
            ]);
    }
}
