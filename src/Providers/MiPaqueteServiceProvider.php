<?php

namespace MiPaquete\Providers;

use Illuminate\Support\ServiceProvider;

class MiPaqueteServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/mipaquete.php', 'mipaquete');
    }

    public function boot(): void
    {
        // Configuración
        $this->publishes([
            __DIR__ . '/../../config/mipaquete.php' => config_path('mipaquete.php'),
        ], 'config');

        // Rutas
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

        // Migraciones
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Vistas
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'mipaquete');
        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/mipaquete'),
        ], 'views');

        // Traducciones
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'mipaquete');
        $this->publishes([
            __DIR__ . '/../../resources/lang' => lang_path('vendor/mipaquete'),
        ], 'lang');

        // Comandos Artisan
        if ($this->app->runningInConsole()) {
            $this->commands([
                \MiPaquete\Console\InstallCommand::class,
            ]);
        }

        // Recursos Públicos
        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/mipaquete'),
        ], 'public');
    }
}
