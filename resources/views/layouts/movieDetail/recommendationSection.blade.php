<section class="">
    <div class="container-fluid scroller">
        <div class="wrapper">
            @foreach ($movieRecommendations['results'] as $recommendations)
                @if ($loop->iteration < 9)
                    <div class="castSection__castMember">
                        <div class="castSection__castMember--profile"> 
                            <img src="{{$baseUrl.$poster_sizes.$recommendations['poster_path']}}"/>
                        </div>
                        <p class="castSection__castMember--name">{{$recommendations['original_title']}}</p>
                        <p class="castSection__castMember--character">{{$recommendations['vote_average']*10}}%</p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>