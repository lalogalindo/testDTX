@extends('homepage')


@section('content')
    <h1>Popular Movies</h1>
    <div class="row">
        <div class="col-md-2">
            filtros
        </div>
        <div class="col-md-10">
            <div class="row">
                @foreach($movies as $movie)
                    @include('components.movieCard')
                @endforeach
            </div>
        </div>
    </div>
@endsection