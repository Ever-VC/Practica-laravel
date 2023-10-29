<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::resource('/', ProyectoController::class);
Route::resource('/proyectos', ProyectoController::class);
Route::get('/proyectos/{proyecto}/informe', [ProyectoController::class, 'report'])->name('proyectos.report');
