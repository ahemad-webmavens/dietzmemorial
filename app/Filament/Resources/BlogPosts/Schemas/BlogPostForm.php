<?php
namespace App\Filament\Resources\BlogPosts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BlogPostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true),

                Textarea::make('excerpt')
                    ->rows(10)
                    ->label('Short Description'),

                Textarea::make('body')
                    ->rows(10)
                    ->required(),

                FileUpload::make('featured_image')
                    ->image()
                    ->disk('public')
                    ->directory('blog')
                    ->visibility('public'),

                DateTimePicker::make('published_at')
                    ->label('Publish Date'),

                TextInput::make('meta_title'),

                Textarea::make('meta_description'),

                Toggle::make('is_active')
                    ->default(true),
            ]);
    }
}
