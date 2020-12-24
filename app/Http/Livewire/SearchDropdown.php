<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = '';

    public function render()
    {
        $searchResults = [];

        if(strlen($this->search) > 2){
            $searchResults = Http::get('https://api.themoviedb.org/3/search/movie?api_key=91880dc97fd583f0ebd6cfdc82412871&language=en-US&page=1&include_adult=false&query='.$this->search)
                             ->json()['results'];
        }
        //dump(collect($searchResults)->take(7));
        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7)
        ]);
    }
}
