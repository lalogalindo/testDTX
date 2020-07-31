@extends('homepage')


@section('content')
    <div class="container">
        <h1>Popular Movies</h1>
        <div class="row no-gutters">
            <div class="col-2">
                @include('components.filters')
            </div>
            <div class="col">
                <div class="row">
                    @foreach($movies['results'] as $movie)
                        @include('components.movieCard')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection