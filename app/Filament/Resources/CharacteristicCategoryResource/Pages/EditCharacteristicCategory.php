<?php

namespace App\Filament\Resources\CharacteristicCategoryResource\Pages;

use App\Filament\Resources\CharacteristicCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCharacteristicCategory extends EditRecord
{
    protected static string $resource = CharacteristicCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
