<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Movies extends Controller
{
    private $apiKey;
    private $baseUri;

    public function __construct()
    {
        $this->apiKey  = env('TMDB_API_KEY');
        $this->baseUri = env('TMDB_API_URL');
    }

    public function listMovies()
    {
        $method = '/movie/popular';

        $response = Http::get($this->baseUri.$method,[
            'api_key' => $this->apiKey,
            'page'    => 1
        ]);

        return view('layouts/listPage')->with('movies',$response->json()['results']);
    }

    public function movieDetail($id)
    {
        return view('layouts/movieDetail',['movieID' => $id]);
    }
}
