<?php
namespace App\Filament\Resources\BlogPosts\Tables;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BlogPostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('published_at')->dateTime(),
                IconColumn::make('is_active')->boolean(),
            ])
            ->defaultSort('published_at', 'desc');
    }
}
