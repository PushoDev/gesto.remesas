<?php

namespace App\Filament\Resources\FamiliarResource\Pages;

use App\Filament\Resources\FamiliarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFamiliars extends ListRecords
{
    protected static string $resource = FamiliarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
