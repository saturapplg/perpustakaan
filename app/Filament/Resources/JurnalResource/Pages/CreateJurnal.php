<?php

namespace App\Filament\Resources\JurnalResource\Pages;

use App\Filament\Resources\JurnalResource;
use Filament\Resources\Pages\CreateRecord;

class CreateJurnal extends CreateRecord
{
    protected static string $resource = JurnalResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['type'] = 'jurnal';
        return $data;
    }
}
