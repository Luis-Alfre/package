<?php

namespace Watchtower\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class ExampleController extends Controller
{
    public function show()
    {
        dd('Hello from the controller');
    }
}
