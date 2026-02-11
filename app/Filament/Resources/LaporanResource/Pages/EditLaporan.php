<?php

namespace App\Filament\Resources\LaporanResource\Pages;

use App\Filament\Resources\LaporanResource;
use Filament\Resources\Pages\EditRecord;

class EditLaporan extends EditRecord
{
    protected static string $resource = LaporanResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['type'] = 'laporan';
        return $data;
    }
}
