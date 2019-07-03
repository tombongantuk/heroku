<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
use GuzzleHttp\Stream\Stream;

class MovieController extends Controller
{
    public function popularMovies()
    {
        try{
            $client=new Client();
            $promise=$client->getAsync('https://api.themoviedb.org/3/movie/popular?api_key=6c06cf708a2172691e3f168896a64509&language=en-US')->then(function ($response){
                return $response->getBody();
            },function ($exception){
                return $exception->getMessage();
            }
            );
        $response=$promise->wait();
        $movies=json_decode($response,true);
        }catch(\GuzzleException $ge){
            Log::error($ge->getMessage());
        }
        return view('movies.movie_list',$response)->with('movie',$movies);
    }
    public function detailMovies(){
        try{
            $client=new Client();
            $promise=$client->getAsync('https://api.themoviedb.org/3/movie/{movie_id}?api_key=6c06cf708a2172691e3f168896a64509&language=en-US')->then(function ($response){
                return $response->getBody();
            },function ($exception){
                return $exception->getMessage();
            }
            );
        $response=$promise->wait();
        $movies=json_decode($response,true);
        }catch(\GuzzleException $ge){
            Log::error($ge->getMessage());
        }
        return view('movies.detail')->with('movie',$movies);
    }
}
