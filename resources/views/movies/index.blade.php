@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')
<h1>
    Movies
</h1>

<div class="row">
    @foreach ($movies as $index => $movie)

    <div class="col-12 col-sm-3">
        <div class="card">
            <h3>{{ $movie->title }}</h3>
            <div class="card-body">
                <h4>
                    {{ $movie['original_title'] }}
                </h4>
            </div>
            <a href="{{ route('movies.show', ['id'=> $book->id]) }}?id={{ movies.show }}" class="btn btn-primary ">
                Go to Movie
            </a>
        </div>
    </div>

    @endforeach
</div>
@endsection
