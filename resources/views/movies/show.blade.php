@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}"  class="w-96">
            <div class="mt-3 md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['title']}}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-yellow-600 w-3" viewBox="0 0 24 24"><path d="M12 20.1l5.82 3.682c1.066.675 2.37-.322 2.09-1.584l-1.543-6.926 5.146-4.667c.94-.85.435-2.465-.799-2.567l-6.773-.602L13.29.89a1.38 1.38 0 0 0-2.581 0l-2.65 6.53-6.774.602C.052 8.126-.453 9.74.486 10.59l5.147 4.666-1.542 6.926c-.28 1.262 1.023 2.26 2.09 1.585L12 20.099z" data-name="star"></path></svg>
                    </span>
                    <span class="ml-1">{{$movie['vote_average']}}</span>
                    <span class="mx-2">|</span>
                    <span >{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach ($movie['genres'] as $genre)
                            {{$genre['name']}}@if(!$loop->last), @endif
                        @endforeach
                    </span>
                </div>

                <p class="text-gray-300 mt-8">
                    {{$movie['overview']}}
                </p>
                @if (count($movie['credits']['cast']) != Null)
                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            @foreach ($movie['credits']['cast'] as $cast)
                                @if ($loop->index < 2)
                                    <div class="mr-6">
                                        <div>{{$cast['original_name']}}</div>
                                        <div class="text-sm text-gray-400">{{$cast['character']}}</div>
                                    </div>
                                @endif
                            @endforeach
                            
                            
                        </div>
                    </div>
                @endif
                
                
                <div x-data="{isOpen: false}">
                    {{-- show play button --}}
                    @if ($movie['videos']['results'] != Null )
                        <div class="mt-12">
                            <button
                              
                              class="flex inline-flex items-center bg-yellow-500 text-gray-800 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150"
                              @click ="isOpen = true"
                            >
                                <svg class="w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM7 6l8 4-8 4V6z"/></svg>
                                <span class="ml-2">Play Trailer</span>
                            </button>
                        </div>
                    @endif
                    {{-- Model for video --}}
                    <div
                    style="background-color: rgba(0, 0, 0, .5);display:none;"
                    class="fixed top-0 left-0 w-full flex items-center shadow-lg overflow-y-auto"
                    x-show.transition.opacity="isOpen"
                    >
                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-4 pt-2">
                                    <button @click="isOpen = false" class="text-3xl leading-none hover:text-gray-300">&times;</button>
                                </div>
                                <div class="modal-body px-8 py-8">
                                    <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                        <iframe width="560" height="315" class="responsive-iframe absolute top-0 left-0 w-full h-full" src="https://youtube.com/embed/{{$movie['videos']['results'][0]['key']}}"  style="border: 0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>        
                
                
                

            </div>
        </div>
    </div> 
    {{-- end movie info --}}


    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-8">

                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index < 5)
                        <div class="mt-8">
                            <a href="#">
                                @if ($cast['profile_path'] != Null)

                                    <img src="{{'https://image.tmdb.org/t/p/w500/'.$cast['profile_path']}}" alt="{{$cast['original_name']}}" class="hover:opacity-75 transition ease-in-out duration-150">

                                @else

                                    <img src="{{'https://via.placeholder.com/438x657.png?text=Not Found'}}" alt="{{$cast['original_name']}}" class="hover:opacity-75 transition ease-in-out duration-150">
                                
                                @endif
                                
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:text-gray-600">{{$cast['original_name']}}</a>
                                <div class="text-gray-400 text-sm">
                                    {{$cast['character']}}
                                </div>
                            </div>
                        </div>
                    @else
                        @break
                    @endif
                    
                @endforeach
                
            </div>
        </div>
    </div>
    {{-- end movie cast --}}

    <div class="movie-images border-b border-gray-800" x-data="{isOpen : false, image: ''}">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1  sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-3 gap-16">
                
                @foreach ($movie['images']['backdrops'] as $image)
                    @if ($loop->index < 9)
                        <div class="mt-8">
                            <a 
                            @click.prevent="
                                isOpen = true 
                                image='{{"https://image.tmdb.org/t/p/original/".$image["file_path"]}}'"
                            href="#">
                                <img src="{{'https://image.tmdb.org/t/p/w500/'.$image['file_path']}}" class="hover:opacity-75 transition ease-in-out duration-150" >
                            </a>
                        </div>
                    @else
                        @break
                    @endif
                @endforeach
               
            </div>
        </div>
        {{-- This Model is for showing images --}}
        <div
        style="background-color: rgba(0, 0, 0, .5);display:none;"
        class="fixed top-0 left-0 w-full flex items-center shadow-lg overflow-y-auto"
        x-show.transition.opacity="isOpen"
        >
            <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto" >
                <div class="bg-gray-900 rounded">
                    <div class="flex justify-end pr-4 pt-2">
                        <button @click="isOpen = false" @keydown.escape.window="isOpen = false" class="text-3xl leading-none hover:text-gray-300">&times;</button>
                    </div>
                    <div class="modal-body px-8 py-8">
                        <div class="responsive-container overflow-hidden relative" >
                             <img :src="image" alt="poster">
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- end movie images --}}
@endsection

