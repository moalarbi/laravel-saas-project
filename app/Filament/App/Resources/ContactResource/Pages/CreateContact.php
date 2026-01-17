<?php

namespace App\Filament\App\Resources\ContactResource\Pages;

use App\Filament\App\Resources\ContactResource;
use Filament\Resources\Pages\CreateRecord;

class CreateContact extends CreateRecord
{
    protected static string $resource = ContactResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data["user_id"] = auth()->id();
        return $data;
    }
}
