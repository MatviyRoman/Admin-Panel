<?php

namespace App\Services;

use App\Repositories\Contracts\CharacteristicCategoryRepositoryContract;
use App\Services\Contracts\CharacteristicServiceContract;
use Illuminate\Support\Collection;

class CharacteristicService implements CharacteristicServiceContract
{
    protected CharacteristicCategoryRepositoryContract $characteristicCategoryRepository;

    public function __construct(CharacteristicCategoryRepositoryContract $characteristicCategoryRepository)
    {
        $this->characteristicCategoryRepository = $characteristicCategoryRepository;
    }

    public function getAllCharacteristicCategoriesWithCharacteristics(): Collection
    {
        return $this->characteristicCategoryRepository->getAllWithCharacteristics();
    }
}
