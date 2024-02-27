<?php

//Questo percorso è il namespace
use App\Http\Controllers\Guest\PageController;

//Includo il file Movie così da poter prendere le funzioni
use App\Http\Controllers\Guest\MovieController;

use Illuminate\Support\Facades\Route;


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

//Index recupera tutti gli elementi di questo dato
Route::get('/', [PageController::class, 'index'])->name('home');

//Index recupera il singolo elemento
Route::get('/about', [PageController::class, 'show'])->name('about');


//Index recupera tutti gli elementi di questo dato
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');

//Index recupera il singolo elemento
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
