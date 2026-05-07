<?php

namespace App\Filament\Resources\PageSectionItems\Pages;

use App\Filament\Resources\PageSectionItems\PageSectionItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPageSectionItems extends ListRecords
{
    protected static string $resource = PageSectionItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
