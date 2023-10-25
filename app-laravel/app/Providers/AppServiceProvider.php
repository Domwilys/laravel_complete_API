<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\DepoimentRepositoryInterface;
use App\Repositories\DepoimentEloquentORM;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this -> app -> bind(DepoimentRepositoryInterface::class, DepoimentEloquentORM::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
