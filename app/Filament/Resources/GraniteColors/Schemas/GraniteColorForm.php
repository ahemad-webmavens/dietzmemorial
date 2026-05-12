<?php
namespace App\Filament\Resources\GraniteColors\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GraniteColorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2) // 👈 2 columns on the whole form
            ->components([
                TextInput::make('name')
                    ->required()
                    ->columnSpan(1), // half width

                Toggle::make('is_active')
                    ->default(true)
                    ->inline(false)
                    ->label('Is Active')
                    ->columnSpan(1), // half width

                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('granite-colors')
                    ->visibility('public')
                    ->imageEditor()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('16:9')
                    ->imageResizeTargetWidth('1600')
                    ->imageResizeTargetHeight('900')
                    ->columnSpan(2), // full width

                Textarea::make('description')
                    ->rows(3)
                    ->columnSpan(2), // full width
            ]);
    }
}
