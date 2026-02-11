<?php

namespace App\Filament\Resources\BookResource\Pages;

use App\Filament\Resources\BookResource;
use Filament\Resources\Pages\EditRecord;

class EditBook extends EditRecord
{
    protected static string $resource = BookResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['type'] = 'book';
        return $data;
    }
}
