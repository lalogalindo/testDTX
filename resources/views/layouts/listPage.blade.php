@extends('homepage')


@section('content')
    <h1>Popular Movies</h1>
    <p>Listado de Jamon</p>
    @foreach($movies as $movie)
        <p><canvas class="canvasPercentage" data-percentage="{{$movie['vote_average']}}" width="40" height="40"></canvas></p>
        <p>"popularity"        => {{$movie['popularity']}}</p>
        <p>"vote_count"        => {{$movie['vote_count']}}</p>
        <p>"video"             => {{$movie['video']}}</p>
        <p>"poster_path"       => {{$movie['poster_path']}}</p>
        <p>"id"                => {{$movie['id']}}</p>
        <p>"adult"             => {{$movie['adult']}}</p>
        <p>"backdrop_path"     => {{$movie['backdrop_path']}}</p>
        <p>"original_language" => {{$movie['original_language']}}</p>
        <p>"original_title"    => {{$movie['original_title']}}</p>
        <p>"genre_ids"         => {{$movie['genre_ids'][0]}}</p>
        <p>"title"             => {{$movie['title']}}</p>
        <p>"vote_average"      => {{$movie['vote_average']}}</p>
        <p>"overview"          => {{$movie['overview']}}</p>
        <p>"release_date"      => {{$movie['release_date']}}</p>
    @endforeach
@endsection