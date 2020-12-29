<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class TvViewModel extends ViewModel
{
    public $popularTv;
    public $topRatedTv;
    public $genres;
    public function __construct($popularTv, $topRatedTv, $genres)
    {
        //
        $this->popularTv = $popularTv;
        $this->topRatedTv = $topRatedTv;
        $this->genres  = $genres;
    }

    public function topRatedTv(){
        return $this->formatTv($this->topRatedTv);
    }

    public function genres(){
        
        return  collect($this->genres)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        }) ;
    }

    private function formatTv($tv){
        return collect($tv)->map(function($tvshow){
            return $tvshow;
        });
    }
}
