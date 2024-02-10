<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index(){
        $api_key = env("OMDB_API_KEY");
        $client = new Client();

        $response = $client->request('GET', 'http://www.omdbapi.com', [
            'query' => [
                'apikey' => $api_key,
                "t" => "*",
                'y' => "2024",
            ]
        ]);

        $movies = json_decode($response->getBody()->getContents(), true);
    }
    public function getAllItems(){
        $api_key = env('OMDB_API_KEY');
            
        
    }
}
