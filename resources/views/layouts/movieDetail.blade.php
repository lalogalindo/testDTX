@extends('homepage')

@section('navigationBar')
    @parent
    JAMONSISIMO 
    <a href="{{ route('movie.list') }}">Movies beatch</a>
@endsection

@section('content')
    Movie id => {{$movieID}}
@endsection