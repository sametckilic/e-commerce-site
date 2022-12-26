<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\CartRepo;
use App\Repository\ICartRepo;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ICartRepo::class, CartRepo::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
