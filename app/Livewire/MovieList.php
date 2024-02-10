<?php

namespace App\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class MovieList extends Component
{

    public $movies = [];
    public $current_page = 1;
    public $total_pages = 0;

    public function mount(){
        $this->fetchData();
    }
    
    public function fetchData(){
        $client = new Client();
        $response = $client->request("GET", "http://www.omdbapi.com", [
            "query" => [
                "apikey" => env("OMDB_API_KEY"),
                "s" => "Harry Potter",
                "page" => $this->current_page,
            ]
        ]);

        $moviesData = json_decode($response->getBody()->getContents(), true);

        if (isset($moviesData['Search'])) {
            $this->movies = $moviesData['Search'];
            $this->total_pages = isset($moviesData['totalResults']) ? ceil($moviesData['totalResults'] / 10) : 0;
        }
    }

    public function render()
    {
        return view('livewire.movie-list');
    }
}
