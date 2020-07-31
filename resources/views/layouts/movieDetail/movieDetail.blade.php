@extends('homepage')

@section('navigationBar')
    @parent
    @include('components.navDetail')
@endsection

@section('content')

    @include('layouts.movieDetail.movieSection')

    <div class="container">
        <div class="row">
            <div class="col-9">
                @include('layouts.movieDetail.castSection')
                {{-- @include('layouts.movieDetail.recommendationSection') --}}
            </div>
            <div class="col">dos</div>
        </div>
    </div>
@endsection