<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\AuditoriaObserver;
use App\Models\Aviso;
use App\Models\Cliente;
use App\Models\Usuario;
use App\Models\Venda;

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
        Aviso::observe(AuditoriaObserver::class);
        Cliente::observe(AuditoriaObserver::class);
        Usuario::observe(AuditoriaObserver::class);
        Venda::observe(AuditoriaObserver::class);
    }
}
