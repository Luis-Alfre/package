<?php

namespace Watchtower\Providers;

use Illuminate\Support\ServiceProvider;

class WatchtowerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/watchtower.php', 'watchtower');
    }

    public function boot(): void
    {
        // Configuración
        $this->publishes([
            __DIR__ . '/../../config/watchtower.php' => config_path('watchtower.php'),
        ], 'config');

        // Rutas
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

        // Migraciones
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Vistas
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'watchtower');
        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/watchtower'),
        ], 'views');

        // Traducciones
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'watchtower');
        $this->publishes([
            __DIR__ . '/../../resources/lang' => lang_path('vendor/watchtower'),
        ], 'lang');

        // Comandos Artisan
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Watchtower\Console\InstallCommand::class,
            ]);
        }

        // Recursos Públicos
        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/watchtower'),
        ], 'public');
    }
}
