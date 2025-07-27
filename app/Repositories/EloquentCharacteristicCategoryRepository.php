<?php

namespace App\Repositories;

use App\Models\CharacteristicCategory;
use App\Repositories\Contracts\CharacteristicCategoryRepositoryContract;
use Illuminate\Support\Collection;

class EloquentCharacteristicCategoryRepository implements CharacteristicCategoryRepositoryContract
{
    public function getAllWithCharacteristics(): Collection
    {
        return CharacteristicCategory::with('characteristics')->get();
    }
}
