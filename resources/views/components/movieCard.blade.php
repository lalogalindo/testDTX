<div class="movieCard" data-id="{{$movie['id']}}">
    <div class="movieCard__image">
        <img src="" data-path="{{$movie['poster_path']}}" data-backdrop="{{$movie['backdrop_path']}}"/>
    </div>
    <div class="movieCard__content">
        <canvas class="movieCard__content--vote-average" data-percentage="{{$movie['vote_average']}}" width="40" height="40"></canvas></br>
        <h2 class="movieCard__content--title">
            <a href="/movie/{{$movie['id']}}" title="{{$movie['title']}}">{{$movie['title']}}</a>
        </h2>
            <span></span>
            <span>{{$movie['release_date']}}</span>
        </p>
    </div>
</div>