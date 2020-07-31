<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class Movies extends Controller
{
    private $apiKey;
    private $baseUri;


    public function __construct()
    {
        $this->apiKey  = env('TMDB_API_KEY');
        $this->baseUri = env('TMDB_API_URL');
        if (!Cache::has('baseUrl')) {
            return redirect()->route('movie.home');
        }
    }

    public function getCache()
    {
        $seconds = 15 * 86400; // 15 days
        $method = '/configuration';

        $response = Http::get($this->baseUri.$method, ['api_key' => $this->apiKey]);

        Cache::put('baseUrl', $response['images']['base_url'], $seconds );
        Cache::put('posterSizes', $response['images']['poster_sizes'][3], $seconds );
        Cache::put('backdropSizes', $response['images']['backdrop_sizes'], $seconds);
        
        return redirect()->route('movie.list');
    }

    private function makeRequest($method,$options) {
        if (!Cache::has('baseUrl')) {
            return redirect()->route('movie.home');
        }
        $options = $options ?? [];
        return Http::get($this->baseUri.$method,
            array_merge(['api_key' => $this->apiKey],$options));
    }

    public function listMovies()
    {
        return view('layouts/listPage',[
            'movies'       => $this->makeRequest('/discover/movie',['page'=> 1]),
            'baseUrl'      => Cache::get('baseUrl'),
            'poster_sizes' => Cache::get('posterSizes')
        ]);
    }

    public function searchMovies(Request $request)
    {
        $options = [
            'page'=> 1,
            'sort_by' => $request->input('sort_by')
        ];
        
        return view('layouts/listPage',[
            'movies'       => $this->makeRequest('/discover/movie',$options),
            'baseUrl'      => Cache::get('baseUrl'),
            'poster_sizes' => Cache::get('posterSizes')
        ]);
    }

    public function movieDetail($id)
    {
        $movieDetails         = $this->makeRequest("/movie/{$id}",null);
        $movieReleaseDates    = $this->makeRequest("/movie/{$id}/release_dates",null);
        $movieCast            = $this->makeRequest("/movie/{$id}/credits",null);
        $movieRecommendations = $this->makeRequest("/movie/{$id}/recommendations",null);

        foreach ($movieReleaseDates['results'] as $releaseDates) {
            if($releaseDates['iso_3166_1'] == "US") {
                $certification = $releaseDates['release_dates'][0]['certification'];
            }
        }

        $certification = $certification ?? null;

        return view('layouts/movieDetail/movieDetail',[
            'movieDetails'         => $movieDetails,
            'certification'        => $certification,
            'movieCast'            => $movieCast,
            'movieRecommendations' => $movieRecommendations,
            'backdropSizes'        => Cache::get('backdropSizes'),
            'baseUrl'              => Cache::get('baseUrl'),
            'poster_sizes'         => Cache::get('posterSizes')
        ]);
    }
}
