<?php

namespace App\Filament\Resources\FamiliarResource\Pages;

use App\Filament\Resources\FamiliarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFamiliar extends EditRecord
{
    protected static string $resource = FamiliarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
