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
        return view('movies.index',compact('movies'));
    }

    public function show($id)
    {
        //Dalla tabella Movie prendi gli elementi che hanno id=id e di questi seleziona il primo
        $movie = Movie::where('id',$id)->first();

        return view('movies.show',compact('movie'));
    }
}
