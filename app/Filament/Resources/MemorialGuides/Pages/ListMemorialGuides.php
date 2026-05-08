<?php

namespace App\Filament\Resources\MemorialGuides\Pages;

use App\Filament\Resources\MemorialGuides\MemorialGuideResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMemorialGuides extends ListRecords
{
    protected static string $resource = MemorialGuideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
