<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;

interface CharacteristicCategoryRepositoryContract
{
    public function getAllWithCharacteristics(): Collection;
}
