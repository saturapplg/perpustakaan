<?php

namespace App\Filament\Resources\InstitusiResource\Pages;

use App\Filament\Resources\InstitusiResource;
use Filament\Resources\Pages\CreateRecord;

class CreateInstitusi extends CreateRecord
{
    protected static string $resource = InstitusiResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['type'] = 'institusi';
        return $data;
    }
}
