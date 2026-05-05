<?php

namespace App\Filament\Resources\GraniteColors\Pages;

use App\Filament\Resources\GraniteColors\GraniteColorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGraniteColors extends ListRecords
{
    protected static string $resource = GraniteColorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
