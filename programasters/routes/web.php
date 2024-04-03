<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\TestimoniosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::get('/servicios', ServiciosController::class)->name('servicios');

Route::get('/portafolio', PortafolioController::class)->name('portafolio');

Route::get('/testimonios', TestimoniosController::class)->name('testimonios');

Route::get('/blog', BlogController::class)->name('blog');

Route::get('/contacto', ContactoController::class)->name('contacto');

Route::get('/faq', FaqController::class)->name('faq');

Route::get('/equipo', EquipoController::class)->name('equipo');