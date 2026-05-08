<?php

namespace App\Filament\Resources\MemorialGuides\Pages;

use App\Filament\Resources\MemorialGuides\MemorialGuideResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMemorialGuide extends EditRecord
{
    protected static string $resource = MemorialGuideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
