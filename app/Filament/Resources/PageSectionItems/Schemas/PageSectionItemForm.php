<?php
namespace App\Filament\Resources\PageSectionItems\Schemas;

use App\Models\PageSection;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PageSectionItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Select::make('page_section_id')
                    ->relationship('section', 'type', fn($query) => $query->where('type', '!=', 'locations'))
                    ->required()
                    ->live(),

                TextInput::make('title')
                    ->visible(fn($get) => self::sectionTypeAllows(
                        $get,
                        ['featured_services', 'story', 'testimonials', 'value_cta', 'hero']
                    )),

                Textarea::make('description')
                    ->rows(4)
                    ->visible(fn($get) => self::sectionTypeAllows(
                        $get,
                        ['featured_services', 'story', 'testimonials', 'value_cta']
                    )),

                TextInput::make('button_text')
                    ->visible(fn($get) => self::sectionTypeAllows(
                        $get,
                        ['story', 'value_cta']
                    )),

                TextInput::make('button_link')
                    ->visible(fn($get) => self::sectionTypeAllows(
                        $get,
                        ['featured_services', 'story', 'value_cta']
                    )),

                FileUpload::make('image')
                    ->image()
                    ->directory('sections')
                    ->imageEditor()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('16:9')
                    ->imageResizeTargetWidth('1600')
                    ->imageResizeTargetHeight('900')
                    ->visible(fn($get) => self::sectionTypeAllows(
                        $get,
                        [
                            'hero',
                            'featured_services',
                            'story',
                            'testimonials',
                            'value_cta',
                        ]
                    )),

                TextInput::make('order')
                    ->numeric()
                    ->default(0)
                    ->visible(fn($get) => self::sectionTypeAllows(
                        $get,
                        ['hero', 'featured_services', 'testimonials']
                    )),

                Toggle::make('is_active')
                    ->default(true)
                    ->inline(false)
                    ->label('Is Active')
                    ->columnSpan(1)
                    ->extraFieldWrapperAttributes([
                        'style' => 'padding-top: 10px;',
                    ]),

            ]);
    }

    protected static function sectionTypeAllows($get, array $types): bool
    {
        $sectionId = $get('page_section_id');

        if (! $sectionId) {
            return false;
        }

        $section = PageSection::find($sectionId);

        if (! $section) {
            return false;
        }

        return in_array($section->type, $types);
    }
}
