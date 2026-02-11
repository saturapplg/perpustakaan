<?php

namespace App\Filament\Resources\LaporanResource\Pages;

use App\Filament\Resources\LaporanResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLaporan extends CreateRecord
{
    protected static string $resource = LaporanResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['type'] = 'laporan';
        return $data;
    }
}
