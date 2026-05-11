<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Section;
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

                Section::make('Basic Information')
                    ->schema([

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

                        Toggle::make('is_active')
                            ->default(true),

                    ])
                    ->columns(1),

              
                Section::make('Page Content')
                    ->schema([

                        RichEditor::make('content')
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'h2',
                                'h3',
                                'bulletList',
                                'orderedList',
                                'link',
                                'blockquote',
                            ])
                            ->extraAttributes([
                                'style' => 'min-height: 300px;',
                            ]),

                    ]),

            
                Section::make('Hero Image')
                    ->schema([

                        FileUpload::make('hero_image')
                            ->image()
                            ->disk('public')
                            ->directory('pages')
                            ->visibility('public')
                            ->imageEditor()
                            ->panelAspectRatio('16:9')
                            ->panelLayout('integrated')
                            ->imageResizeTargetWidth('1600')
                            ->imageResizeTargetHeight('900'),

                    ]),

               
                Section::make('Extra Structured Data')
                    ->description('Used for advanced page content like stats, values, timelines, etc.')
                    ->schema([

                        Textarea::make('extra')
                            ->rows(14)
                            ->formatStateUsing(fn ($state) => $state
                                ? json_encode($state, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
                                : null)
                            ->dehydrateStateUsing(fn ($state) => json_decode($state, true))
                            ->columnSpanFull()

                    ]),

            
               Section::make('SEO')
                ->schema([

                    TextInput::make('meta_title')
                        ->columnSpanFull(),

                    Textarea::make('meta_description')
                        ->rows(4)
                        ->columnSpanFull(),

                ])
                ->columnSpanFull(),

            ]);
    }
}