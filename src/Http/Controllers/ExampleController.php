<?php

namespace MiPaquete\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function show()
    {
        return view('mipaquete::example');
    }
}
