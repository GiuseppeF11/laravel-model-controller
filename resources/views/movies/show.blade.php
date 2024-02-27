@extends('layouts.app')

@section('page-title', $movie->title)

@section('main-content')

    <main>
        <div class="container">
            <h1>
                {{ $movie->title }}
            </h1>
            <a href="/movies" class="btn btn-primary ">
                Torna alla lista
            </a>
            <div class="row">
                <div class="col-12 col-sm-3 mb-3 ">
                    <div class="card">
                        <h3>
                            {{ $movie->title }}
                        </h3>
                        <p>
                            {{ $movie->date }}
                        </p>
                        <p>
                            {{ $movie->vote }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
