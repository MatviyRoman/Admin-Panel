<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CharacteristicService;
use App\Services\Contracts\CharacteristicServiceContract;
use App\Repositories\Contracts\CharacteristicCategoryRepositoryContract;
use App\Repositories\EloquentCharacteristicCategoryRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CharacteristicServiceContract::class, CharacteristicService::class);
        $this->app->bind(CharacteristicCategoryRepositoryContract::class, EloquentCharacteristicCategoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
