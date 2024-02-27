@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')

    <main>
        <div class="container">
            <h1>
                Movies
            </h1>
            <div class="row">
                @foreach ($movies as $index => $movie)
                    <div class="col-12 col-sm-3 mb-3 ">
                        <div class="card">
                            <h3>
                                {{ $movie->title }}
                            </h3>
                            <p>
                                {{ $movie->date }}
                            </p>
                            <a href="{{ route('movies.show', ['id'=> $movie->id]) }}" class="btn btn-primary ">
                                Vai al film
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
