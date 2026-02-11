<?php

namespace App\Filament\Resources\JurnalResource\Pages;

use App\Filament\Resources\JurnalResource;
use Filament\Resources\Pages\EditRecord;

class EditJurnal extends EditRecord
{
    protected static string $resource = JurnalResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['type'] = 'jurnal';
        return $data;
    }
}
