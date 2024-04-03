<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimoniosController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view("testimonios.index");
    }
}
