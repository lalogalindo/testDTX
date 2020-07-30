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
                <div class="movieCard">
                    <p>
                        <canvas class="canvasPercentage" data-percentage="{{$movie['vote_average']}}" width="40" height="40"></canvas></br>
                        "poster_path"       => {{$movie['poster_path']}}</br>
                        "id"                => {{$movie['id']}}</br>
                        "backdrop_path"     => {{$movie['backdrop_path']}}</br>
                        "original_title"    => {{$movie['original_title']}}</br>
                        "title"             => {{$movie['title']}}</br>
                        "release_date"      => {{$movie['release_date']}}</br>
                    </p>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection