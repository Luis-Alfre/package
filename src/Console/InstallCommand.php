<?php

namespace MiPaquete\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'mipaquete:install';
    protected $description = 'Instala MiPaquete';

    public function handle(): void
    {
        $this->info('¡MiPaquete instalado correctamente!');
    }
}
