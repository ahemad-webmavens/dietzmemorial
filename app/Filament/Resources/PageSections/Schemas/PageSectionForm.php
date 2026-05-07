<?php
namespace App\Filament\Resources\PageSections\Schemas;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PageSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('page_id')
                    ->relationship('page', 'title')
                    ->required(),

                Select::make('type')
                    ->options([
                        'hero'              => 'Hero',
                        'about'             => 'About',
                        'cta'               => 'CTA',
                        'featured_services' => 'Featured Services',
                        'story'             => 'Story / About',
                        'testimonials'      => 'Testimonials',
                        'locations'         => 'Locations / Service Areas',
                        'value_cta'         => 'Value Proposition CTA',
                    ])
                    ->required(),

                KeyValue::make('content')
                    ->keyLabel('Field')
                    ->valueLabel('Value'),

                TextInput::make('order')
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->default(true),

            ]);
    }
}
