@extends('layouts.app')

@section('page-title', $movie->title)

@section('main-content')
<h1>
    {{ $movie->title }}
</h1>

<div class="row">

    <div class="col-12 col-sm-3">
        <div class="card">
            <h3>{{ $movie->title }}</h3>
            <div class="card-body">
                <h4>
                    {{ $movie->original_title }}
                </h4>
            </div>
            <p>
                {{ $movie->date }}
            </p>
        </div>
    </div>

</div>
@endsection
