<section class="castSection">
    <div class="container-fluid scroller">
        <div class="wrapper">
            @foreach ($movieCast['cast'] as $castMember)
                @if ($loop->iteration < 9)
                    <div class="castSection__castMember">
                        <div class="castSection__castMember--profile"> 
                            <img src="{{$baseUrl.$poster_sizes.$castMember['profile_path']}}"/>
                        </div>
                        <p class="castSection__castMember--name">{{$castMember['name']}}</p>
                        <p class="castSection__castMember--character">{{$castMember['character']}}</p>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>