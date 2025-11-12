<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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
        
        // Proteger rutas con expresiones regulares
        //solo con letras mayusculas y minusculas y numeros
        Route::pattern('producto', '[a-zA-Z0-9]+');
    }
}
