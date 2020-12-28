@extends('layouts.main')


@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-tv">
            <h2 class="uppercase tracking-wider text-yellow-600 text-lg font-semibold">Popular Tv Show</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-8">
            
                {{-- @foreach ($popularMovies as $movie)
                    @if ($loop->index < 10)
                     <x-movie-card :movie="$movie" :genres="$genres" />
                    @else
                        @break
                    @endif
                    
                @endforeach --}}
                
                
            </div>       
            {{-- end popular tv --}}  
        </div>
        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-yellow-600 text-lg font-semibold">Top Rated Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-8">
            
                {{-- @foreach ($nowPlaying as $movie)         
                    @if ($loop->index < 10)
                        <x-movie-card :movie="$movie" :genres="$genres" />
                    @else
                        @break
                    @endif        
                @endforeach --}}
                {{-- end Now Playing --}}
            </div>
        </div> 
        
    </div>
@endsection