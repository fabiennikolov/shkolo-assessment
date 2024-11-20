<?php

namespace App\Providers;

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
    public function boot()
    {
        // Сложил съм forcescheme да е https заради ngrok-a иначе правя проверка дали env === production
        \URL::forceScheme('https');
    }
}
