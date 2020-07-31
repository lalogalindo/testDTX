@php
    $release_date  = \Carbon\Carbon::parse($movieDetails['release_date']);
    $duration_time = intdiv($movieDetails['runtime'], 60).'h '. ($movieDetails['runtime'] % 60).'m';

    end($backdropSizes);
    $backdropSize = prev($backdropSizes);
@endphp

<style>
    .movieSection {
        background-image: url({{$baseUrl.$backdropSize.$movieDetails['backdrop_path']}});
    }
</style>

<section class="movieSection">
    <img id="fakeImage" src="{{$baseUrl.$poster_sizes.$movieDetails['poster_path']}}"/>
    <div class="movieSection__content">
        <div class="container">

            <div class="movieSection__poster">
                <div class="movieSection__poster--image">
                    <img src="{{$baseUrl.$poster_sizes.$movieDetails['poster_path']}}"/>
                </div>
                {{-- <div class="movieSection__poster--button">
                    <button>boton</button>
                </div> --}}
            </div>

            <div class="movieSection__details">

                <h2 class="movieSection__details--title">{{$movieDetails["title"]}} <span class="year">({{$release_date->format('Y')}})</span></h2>
                
                <div class="movieSection__details--facts">
                    <p class="certification">{{$certification}}</p> 
                    <p>{{$release_date->format('d/m/Y')}}</p>
                    <p class="bullet">
                        @foreach ($movieDetails['genres'] as $genre)
                        <a href="{{$genre['id']}}">{{$genre['name']}}</a>{{$loop->last ? '' : ','}}
                        @endforeach
                    </p>
                    <p class="bullet">
                        {{$duration_time}}
                    </p>
                </div>
                
                <div class="movieSection__details--actions">
                    <canvas class="movieSection__details--actions-vote" data-percentage="{{$movieDetails['vote_average']}}" width="65" height="65"></canvas></br>
                    <p class="movieSection__details--actions-vote-text">User Score</p>
                    <i class="fas fa-list"></i>
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-bookmark"></i>
                    <i class="fas fa-star"></i>
                    <a href="javascript:void()"><i class="fas fa-play"></i> Play Trailer</a>
                </div>
                
                <div class="movieSection__details--overview">
                    <p class="movieSection__details--overview-tagline">{{$movieDetails['tagline']}}</p>
                    <h3 class="movieSection__details--overview-title">Overview</h3>
                    <p class="movieSection__details--overview-summary">{{$movieDetails['overview']}}</p>
                </div>

                <div class="movieSection__details--crew"></div>
            </div>
        </div>
    </div>
</section>