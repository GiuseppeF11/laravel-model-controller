<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        //Recupera tutti gli elementi di questo tipo di dato
        $movies = Movie::all(); //dalla tabella Movie prendi tutti gli elementi
        
        /* dd($movies); //debug per vedere se sta prendendo i dati */
        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        //Dalla tabella a cui è collegato il modello prendimi il dato con parametro = id
        $movie = Movie::find($id);

        return view('movies.show', compact('movie'));
    }
}
