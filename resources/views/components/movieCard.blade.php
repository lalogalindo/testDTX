<div class="movieCard" data-id="{{$movie['id']}}">
    <div class="movieCard__image">
        <a href="/movie/{{$movie['id']}}">
            <img src="{{$baseUrl.$poster_sizes.$movie['poster_path']}}"/>
        </a>
    </div>
    <div class="movieCard__content">
        <canvas class="movieCard__content--vote-average" data-percentage="{{$movie['vote_average']}}" width="38" height="38"></canvas></br>
        <h2 class="movieCard__content--title">
            <a href="/movie/{{$movie['id']}}" title="{{$movie['title']}}">{{$movie['title']}}</a>
        </h2>
        <span>{{$movie['release_date']}}</span>
        </p>
    </div>
</div>