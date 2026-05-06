<?php
namespace App\Filament\Resources\Settings\Pages;

use App\Filament\Resources\Settings\SettingResource;
use Filament\Resources\Pages\EditRecord;

class EditSetting extends EditRecord
{
    protected static string $resource = SettingResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if (in_array($data['key'], ['logo', 'favicon'])) {
            $data['file_value'] = $data['value'];
        }
        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['file_value']) && $data['file_value']) {
            $data['value'] = $data['file_value'];
        }
        unset($data['file_value']);
        return $data;
    }
}
