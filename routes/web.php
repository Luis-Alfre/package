<?php

use Illuminate\Support\Facades\Route;
use MiPaquete\Http\Controllers\ExampleController;

Route::get('mipaquete/example', [ExampleController::class, 'show']);
