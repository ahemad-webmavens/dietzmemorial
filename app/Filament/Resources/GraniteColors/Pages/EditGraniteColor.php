<?php

namespace App\Filament\Resources\GraniteColors\Pages;

use App\Filament\Resources\GraniteColors\GraniteColorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditGraniteColor extends EditRecord
{
    protected static string $resource = GraniteColorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
