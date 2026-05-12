<?php
namespace App\Filament\Resources\PageSectionItems\Tables;

use App\Models\Page;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PageSectionItemsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('image'),

                TextColumn::make('section.page.title')
                    ->label('Page')
                    ->sortable(),

                TextColumn::make('section.type')
                    ->label('Section')
                    ->sortable(),

                TextColumn::make('title'),

                IconColumn::make('is_active')
                    ->boolean(),

            ])
            ->filters([

                // Filter by Page
                SelectFilter::make('page')
                    ->label('Filter by Page')
                    ->options(fn() => Page::pluck('title', 'id'))
                    ->query(function ($query, $data) {
                        if ($data['value']) {
                            $query->whereHas('section', fn($q) => $q->where('page_id', $data['value']));
                        }
                    }),

                // Filter by Section Type
                SelectFilter::make('section_type')
                    ->label('Filter by Section')
                    ->options([
                        'hero'              => 'Hero',
                        'featured_services' => 'Featured Services',
                        'story'             => 'Story / About',
                        'testimonials'      => 'Testimonials',
                        'value_cta'         => 'Value Proposition CTA',
                    ])
                    ->query(function ($query, $data) {
                        if ($data['value']) {
                            $query->whereHas('section', fn($q) => $q->where('type', $data['value']));
                        }
                    }),

            ])
            ->defaultSort('order');
    }
}
