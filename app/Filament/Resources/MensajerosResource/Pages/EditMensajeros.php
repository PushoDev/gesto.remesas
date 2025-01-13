<?php

namespace App\Filament\Resources\MensajerosResource\Pages;

use App\Filament\Resources\MensajerosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMensajeros extends EditRecord
{
    protected static string $resource = MensajerosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
