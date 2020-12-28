<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModels\TvViewModel;
use Illuminate\Support\Facades\Http;

class tvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $populartv = Http::get('https://api.themoviedb.org/3/tv/popular?api_key=91880dc97fd583f0ebd6cfdc82412871')
                        ->json()['results'];
        $topRatedTv    = Http::get('https://api.themoviedb.org/3/tv/top_rated?api_key=91880dc97fd583f0ebd6cfdc82412871')
                        ->json()['results'];
        $genres = Http::get('https://api.themoviedb.org/3/genre/tv/list?api_key=91880dc97fd583f0ebd6cfdc82412871')
                        ->json()['genres'];
       
        $viewModel = new TvViewModel(
                $populartv,
                $topRatedTv,
                $genres,
        );

        return view('tv.index', $viewModel);
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