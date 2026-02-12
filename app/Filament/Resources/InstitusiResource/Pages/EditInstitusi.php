<?php

namespace App\Filament\Resources\InstitusiResource\Pages;

use App\Filament\Resources\InstitusiResource;
use Filament\Resources\Pages\EditRecord;

class EditInstitusi extends EditRecord
{
    protected static string $resource = InstitusiResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['type'] = 'institusi';
        return $data;
    }
}
