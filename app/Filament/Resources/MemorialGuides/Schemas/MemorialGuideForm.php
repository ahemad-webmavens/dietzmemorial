<?php
namespace App\Filament\Resources\MemorialGuides\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MemorialGuideForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([

                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(1),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->columnSpan(1),

                Textarea::make('content')
                    ->rows(10)
                    ->columnSpan(1),

                FileUpload::make('featured_image')
                    ->image()
                    ->directory('guides')
                    ->imageEditor()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('16:9')
                    ->imageResizeTargetWidth('1600')
                    ->imageResizeTargetHeight('900')
                    ->columnSpan(1),

                Toggle::make('is_active')
                    ->default(true)
                    ->inline(false)
                    ->label('Is Active')
                    ->columnSpan(2),

            ]);
    }
}
