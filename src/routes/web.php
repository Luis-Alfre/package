<?php

use Illuminate\Support\Facades\Route;
use Watchtower\Http\Controllers\ExampleController;

Route::get('mipaquete/example', [ExampleController::class, 'show']);
