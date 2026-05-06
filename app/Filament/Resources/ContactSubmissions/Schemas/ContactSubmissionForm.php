<?php
namespace App\Filament\Resources\ContactSubmissions\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContactSubmissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('location_id')
                    ->relationship('location', 'name'),

                TextInput::make('name'),

                TextInput::make('email'),

                TextInput::make('phone'),

                Textarea::make('message')
                    ->rows(6),
            ]);
    }
}
