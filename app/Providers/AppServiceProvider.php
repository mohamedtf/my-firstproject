<?php

namespace App\Providers;
use Illuminate\Support\Facades\schema;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         schema::defaultStringLength(191);
    }
}
