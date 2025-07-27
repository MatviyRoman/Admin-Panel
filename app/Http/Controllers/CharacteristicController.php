<?php

namespace App\Http\Controllers;

use App\Services\Contracts\CharacteristicServiceContract;
use Illuminate\Http\Request;

class CharacteristicController extends Controller
{
    protected CharacteristicServiceContract $characteristicService;

    public function __construct(CharacteristicServiceContract $characteristicService)
    {
        $this->characteristicService = $characteristicService;
    }

    public function index()
    {
        $categories = $this->characteristicService->getAllCharacteristicCategoriesWithCharacteristics();
        return view('characteristics.index', compact('categories'));
    }
}
