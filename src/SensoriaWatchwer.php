<?php

namespace Watchtower;

use Filament\Contracts\Plugin;
use Filament\Panel;

class SensoriaWatchwer implements Plugin
{

    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'sensoria-watchtower';
    }

    public function register(Panel $panel): void
    {
            $panel->resources([
                Resources\DataResource::class,
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
