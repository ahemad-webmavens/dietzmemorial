<?php
namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
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

                Select::make('template')
                    ->options([
                        'default'        => 'Default',
                        'about'          => 'About Us',
                        'memorial_guide' => 'Memorial Design Guide',
                        'contact'        => 'Contact',
                    ])
                    ->default('default')
                    ->required(),

                RichEditor::make('content'),

                FileUpload::make('hero_image')
                    ->image()
                    ->disk('public')
                    ->directory('pages')
                    ->visibility('public'),

                KeyValue::make('extra')
                    ->label('Extra Page Data')
                    ->helperText('Add structured data like founded year, stats, etc.')
                    ->nullable(),

                TextInput::make('meta_title'),

                Textarea::make('meta_description'),

                Toggle::make('is_active')
                    ->default(true),
            ]);
    }
}
