<?php
namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
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
                                'services'       => 'Services',
                                'memorial_guide' => 'Memorial Design Guide',
                                'contact'        => 'Contact',
                                'locations'      => 'Locations',
                                'gallery'        => 'Gallery',
                            ])
                            ->default('default')
                            ->required()
                            ->live(),

                        Toggle::make('is_active')
                            ->default(true),

                    ])
                    ->columns(1),

                Section::make('Page Content')
                    ->schema([
                        RichEditor::make('content')
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'bold', 'italic', 'underline', 'strike',
                                'h2', 'h3', 'bulletList', 'orderedList',
                                'link', 'blockquote',
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

                Section::make('Extra Data')
                    ->description('Add custom key-value data for this page.')
                    ->visible(fn($get) => $get('template') === 'default')
                    ->schema([

                        Repeater::make('extra_data')
                            ->schema([
                                TextInput::make('key')
                                    ->label('Key')
                                    ->required(),
                                TextInput::make('value')
                                    ->label('Value'),
                            ])
                            ->columns(2)
                            ->addActionLabel('Add Row')
                            ->default([
                                ['key' => 'heading', 'value' => ''],
                                ['key' => 'subheading', 'value' => ''],
                            ])
                            ->columnSpanFull(),

                    ]),

                Section::make('About Page — Hero')
                    ->description('Fields for the hero banner at the top of the About page.')
                    ->visible(fn($get) => $get('template') === 'about')
                    ->schema([

                        TextInput::make('extra.eyebrow')
                            ->label('Eyebrow Text')
                            ->placeholder('Our Story'),

                        TextInput::make('extra.hero_heading')
                            ->label('Hero Heading')
                            ->placeholder('About Dietz Memorial'),

                    ])
                    ->columns(2),

                Section::make('About Page — Stats Bar')
                    ->description('The green stats strip below the hero.')
                    ->visible(fn($get) => $get('template') === 'about')
                    ->schema([

                        Repeater::make('extra.stats')
                            ->label('Stats')
                            ->schema([
                                TextInput::make('label')
                                    ->placeholder('Founded'),
                                TextInput::make('value')
                                    ->placeholder('1903'),
                            ])
                            ->columns(2)
                            ->addActionLabel('Add Stat')
                            ->defaultItems(0),

                    ]),

                Section::make('About Page — Story Section')
                    ->description('The two column story section.')
                    ->visible(fn($get) => $get('template') === 'about')
                    ->schema([

                        TextInput::make('extra.story_eyebrow')
                            ->label('Eyebrow')
                            ->placeholder('Our Legacy'),

                        TextInput::make('extra.story_heading')
                            ->label('Heading')
                            ->placeholder('A Century of Service'),

                        TextInput::make('extra.accent_label')
                            ->label('Accent Box Label')
                            ->placeholder('Established'),

                        TextInput::make('extra.accent_year')
                            ->label('Accent Box Year')
                            ->placeholder('1903'),

                        TextInput::make('extra.cta_label')
                            ->label('CTA Button Text')
                            ->placeholder('Get In Touch'),

                        TextInput::make('extra.cta_url')
                            ->label('CTA Button URL')
                            ->placeholder('/contact'),

                    ])
                    ->columns(2),

                Section::make('About Page — Values')
                    ->description('The three value cards section.')
                    ->visible(fn($get) => $get('template') === 'about')
                    ->schema([

                        TextInput::make('extra.values_eyebrow')
                            ->label('Eyebrow')
                            ->placeholder('Why Choose Us'),

                        TextInput::make('extra.values_heading')
                            ->label('Heading')
                            ->placeholder('Our Commitment To You'),

                        Repeater::make('extra.values')
                            ->label('Value Cards')
                            ->schema([
                                TextInput::make('title')
                                    ->placeholder('Over 120 Years'),
                                Textarea::make('body')
                                    ->rows(2)
                                    ->placeholder('A century of craftsmanship...'),
                            ])
                            ->columns(2)
                            ->addActionLabel('Add Value Card')
                            ->defaultItems(0)
                            ->columnSpanFull(),

                    ])
                    ->columns(2),

                Section::make('About Page — Bottom CTA')
                    ->description('The dark green CTA banner at the bottom.')
                    ->visible(fn($get) => $get('template') === 'about')
                    ->schema([

                        TextInput::make('extra.bottom_cta_eyebrow')
                            ->label('Eyebrow')
                            ->placeholder('We Are Here For You'),

                        TextInput::make('extra.bottom_cta_heading')
                            ->label('Heading')
                            ->placeholder('Ready To Create A Lasting Memorial?'),

                        TextInput::make('extra.bottom_cta_primary_label')
                            ->label('Primary Button Text')
                            ->placeholder('Contact Us'),

                        TextInput::make('extra.bottom_cta_primary_url')
                            ->label('Primary Button URL')
                            ->placeholder('/contact'),

                        TextInput::make('extra.bottom_cta_secondary_label')
                            ->label('Secondary Button Text')
                            ->placeholder('Visit A Location'),

                        TextInput::make('extra.bottom_cta_secondary_url')
                            ->label('Secondary Button URL')
                            ->placeholder('/locations'),

                    ])
                    ->columns(2),

                Section::make('Services Page — Hero')
                    ->visible(fn($get) => $get('template') === 'services')
                    ->schema([

                        TextInput::make('extra.eyebrow')
                            ->label('Eyebrow Text')
                            ->placeholder('What We Offer'),

                        TextInput::make('extra.hero_heading')
                            ->label('Hero Heading')
                            ->placeholder('Our Services'),

                        Textarea::make('extra.hero_subtext')
                            ->label('Hero Subtext')
                            ->rows(2)
                            ->placeholder('Crafting meaningful tributes...')
                            ->columnSpanFull(),

                    ])
                    ->columns(2),

                Section::make('Services Page — Bottom CTA')
                    ->visible(fn($get) => $get('template') === 'services')
                    ->schema([

                        TextInput::make('extra.bottom_cta_eyebrow')
                            ->label('Eyebrow')
                            ->placeholder('Need Guidance?'),

                        TextInput::make('extra.bottom_cta_heading')
                            ->label('Heading')
                            ->placeholder("We're Here to Help"),

                        Textarea::make('extra.bottom_cta_body')
                            ->label('Body Text')
                            ->rows(2)
                            ->columnSpanFull()
                            ->placeholder('Our team is available to answer any questions...'),

                        TextInput::make('extra.bottom_cta_label')
                            ->label('Button Text')
                            ->placeholder('Contact Us'),

                        TextInput::make('extra.bottom_cta_url')
                            ->label('Button URL')
                            ->placeholder('/contact'),

                    ])
                    ->columns(2),

                Section::make('Gallery Page — Hero')
                    ->visible(fn($get) => $get('template') === 'gallery')
                    ->schema([

                        TextInput::make('extra.eyebrow')
                            ->label('Eyebrow Text')
                            ->placeholder('Our Work'),

                        TextInput::make('extra.hero_heading')
                            ->label('Hero Heading')
                            ->placeholder('Memorial Gallery'),

                        Textarea::make('extra.hero_subtext')
                            ->label('Hero Subtext')
                            ->rows(2)
                            ->placeholder('Browse our collection...')
                            ->columnSpanFull(),

                    ])
                    ->columns(2),

                Section::make('Locations Page — Hero')
                    ->visible(fn($get) => $get('template') === 'locations')
                    ->schema([

                        TextInput::make('extra.eyebrow')
                            ->label('Eyebrow Text')
                            ->placeholder('Find Us'),

                        TextInput::make('extra.hero_heading')
                            ->label('Hero Heading')
                            ->placeholder('Our Locations'),

                        Textarea::make('extra.hero_subtext')
                            ->label('Hero Subtext')
                            ->rows(2)
                            ->placeholder('Serving Central Texas...')
                            ->columnSpanFull(),

                    ])
                    ->columns(2),

                Section::make('Locations Page — Bottom CTA')
                    ->visible(fn($get) => $get('template') === 'locations')
                    ->schema([

                        TextInput::make('extra.bottom_cta_eyebrow')
                            ->label('Eyebrow')
                            ->placeholder('Get In Touch'),

                        TextInput::make('extra.bottom_cta_heading')
                            ->label('Heading')
                            ->placeholder('Not Sure Which Location to Visit?'),

                        Textarea::make('extra.bottom_cta_body')
                            ->label('Body Text')
                            ->rows(2)
                            ->columnSpanFull()
                            ->placeholder('Our team is happy to help...'),

                        TextInput::make('extra.bottom_cta_label')
                            ->label('Button Text')
                            ->placeholder('Contact Us'),

                        TextInput::make('extra.bottom_cta_url')
                            ->label('Button URL')
                            ->placeholder('/contact'),

                    ])
                    ->columns(2),

                Section::make('Contact Page — Hero')
                    ->visible(fn($get) => $get('template') === 'contact')
                    ->schema([

                        TextInput::make('extra.hero_heading')
                            ->label('Hero Heading')
                            ->placeholder('Contact Us'),

                        Textarea::make('extra.hero_subtext')
                            ->label('Hero Subtext')
                            ->rows(2)
                            ->placeholder("We're here to help...")
                            ->columnSpanFull(),

                    ])
                    ->columns(2),

                Section::make('Contact Page — Waco Location Info')
                    ->visible(fn($get) => $get('template') === 'contact')
                    ->schema([

                        TextInput::make('extra.waco_heading')
                            ->label('Heading')
                            ->placeholder('Waco — Headquarters'),

                        TextInput::make('extra.waco_hours')
                            ->label('Hours')
                            ->placeholder('Mon–Fri: 9:00 AM – 5:00 PM'),

                        TextInput::make('extra.waco_address')
                            ->label('Street Address')
                            ->placeholder('500 LaSalle Ave'),

                        TextInput::make('extra.waco_city_state_zip')
                            ->label('City, State ZIP')
                            ->placeholder('Waco, TX 76706'),

                    ])
                    ->columns(2),

                Section::make('Contact Page — New Braunfels Location Info')
                    ->visible(fn($get) => $get('template') === 'contact')
                    ->schema([

                        TextInput::make('extra.nb_heading')
                            ->label('Heading')
                            ->placeholder('New Braunfels'),

                        TextInput::make('extra.nb_address')
                            ->label('Street Address')
                            ->placeholder('628 S. Business IH 35'),

                        TextInput::make('extra.nb_city_state_zip')
                            ->label('City, State ZIP')
                            ->placeholder('New Braunfels, TX 78130'),

                    ])
                    ->columns(2),

                Section::make('Contact Page — Trust Badge')
                    ->visible(fn($get) => $get('template') === 'contact')
                    ->schema([

                        TextInput::make('extra.trust_label')
                            ->label('Trust Label')
                            ->placeholder('Family-Owned Since 1903'),

                        Textarea::make('extra.trust_body')
                            ->label('Trust Body')
                            ->rows(2)
                            ->placeholder('Proudly serving Waco...')
                            ->columnSpanFull(),

                    ])
                    ->columns(2),

                Section::make('SEO')
                    ->schema([
                        TextInput::make('meta_title')
                            ->columnSpanFull(),
                        Textarea::make('meta_description')
                            ->rows(4)
                            ->columnSpanFull(),
                    ]),

            ]);
    }
}
