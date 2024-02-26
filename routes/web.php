<?php

use App\Http\Controllers\Guest\PageController;

//Includo il file Movie così da poter prendere le funzioni
use App\Models\Movie;

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

//Definiamo la classe da usare ed il nome della funzione da usare come stringa
Route::get('/', [PageController::class, 'index'])->name('home');  
//La funzione index la recuperiamo dalla classe PageController

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/movies', [Movie::class, 'index'])->name('movies.index');

//Index recupera tutti gli elementi di questo dato
Route::get('/movies', [Movie::class, 'index'])->name('movies.index');

//Index recupera il singolo elemento
Route::get('/movies/{id}', [Movie::class, 'show'])->name('movies.show');
