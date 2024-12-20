<?php

namespace Watchtower\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;

class WatchtowerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/watchtower.php', 'watchtower');
    }

    public function boot(): void
    {
        // Registrar las rutas de Filament
        Filament::registerResources([
            \Watchtower\Resources\DataResource::class,
        ]);

        // Configuración
        $this->publishes([
            __DIR__ . '/../../config/watchtower.php' => config_path('watchtower.php'),
        ], 'config');

        // Rutas
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Migraciones
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // Recursos Públicos
        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/watchtower'),
        ], 'public');
    }
}
