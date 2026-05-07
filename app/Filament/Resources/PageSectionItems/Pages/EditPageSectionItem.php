<?php

namespace App\Filament\Resources\PageSectionItems\Pages;

use App\Filament\Resources\PageSectionItems\PageSectionItemResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPageSectionItem extends EditRecord
{
    protected static string $resource = PageSectionItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
