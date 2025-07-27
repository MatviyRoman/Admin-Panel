<?php

namespace App\Services\Contracts;

use Illuminate\Support\Collection;

interface CharacteristicServiceContract
{
    public function getAllCharacteristicCategoriesWithCharacteristics(): Collection;
}
