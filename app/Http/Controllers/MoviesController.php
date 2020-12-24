<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //when use token use this method
        // Http::withToken(config(services.tmdb.token))->get('website')->json() and add token to config/services.php
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=91880dc97fd583f0ebd6cfdc82412871')
                        ->json()['results'];
        $nowPlaying    = Http::get('https://api.themoviedb.org/3/movie/now_playing?api_key=91880dc97fd583f0ebd6cfdc82412871')
                        ->json()['results'];
        $genresArray = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=91880dc97fd583f0ebd6cfdc82412871')
                        ->json()['genres'];

        $genres = collect($genresArray)->mapWithKeys(function($genre){
            return [$genre['id'] => $genre['name']];
        });

        //dump($nowPlaying);
        return view('index', [
            'popularMovies' => $popularMovies,
            'nowPlaying'    => $nowPlaying,    
            'genres'        => $genres   
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $movie = Http::get('https://api.themoviedb.org/3/movie/'.$id.'?api_key=91880dc97fd583f0ebd6cfdc82412871&append_to_response=credits,videos,images')
                ->json();

        // $cast = Http::get('https://api.themoviedb.org/3/movie/'.$id.'/credits?api_key=91880dc97fd583f0ebd6cfdc82412871')
        //         ->json();        

        dump($movie);        

        return view('show', [

            'movie' => $movie,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
