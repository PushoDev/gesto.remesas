<?php

namespace App\Filament\Resources\MensajerosResource\Pages;

use App\Filament\Resources\MensajerosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMensajeros extends ListRecords
{
    protected static string $resource = MensajerosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
