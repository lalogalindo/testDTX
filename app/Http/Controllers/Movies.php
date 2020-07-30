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
    }

    public function getCache()
    {
        $seconds = 15 * 86400; // 15 days
        $method = '/configuration';

        $response = Http::get($this->baseUri.$method, ['api_key' => $this->apiKey]);

        Cache::put('baseUrl', $response->json()['images']['base_url'], $seconds );
        Cache::put('posterSizes', $response->json()['images']['poster_sizes'][3], $seconds );
        
        return redirect()->route('movie.list');
    }

    public function listMovies()
    {
        $method = '/movie/popular';

        $response = Http::get($this->baseUri.$method,[
            'api_key' => $this->apiKey,
            'page'    => 1
        ]);

        return view('layouts/listPage',[
            'movies'       => $response->json()['results'],
            'baseUrl'      => Cache::get('baseUrl'),
            'poster_sizes' => Cache::get('posterSizes')
        ]);
    }

    public function movieDetail($id)
    {
        return view('layouts/movieDetail',['movieID' => $id]);
    }
}
