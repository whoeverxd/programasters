<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercaController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view("acerca.index");
    }
}
