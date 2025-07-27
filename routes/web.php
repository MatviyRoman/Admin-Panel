<?php

use App\Http\Controllers\CharacteristicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('about');
});

Route::get('/characteristics', [CharacteristicController::class, 'index'])->name('characteristics.index');
