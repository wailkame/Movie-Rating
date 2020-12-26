@extends('layouts.main')


@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-actors">
            <h2 class="uppercase tracking-wider text-yellow-600 text-lg font-semibold">Popular Actors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-8">
                
                <div class="actor mt-8">
                    <a href="#">
                        <img class="hover:opacity-75 transition ease-in-out duration-150" src="https://image.tmdb.org/t/p/w235_and_h235_face/A1XBu3CffBpSK8HEIJM8q7Mn4lz.jpg" alt="">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg hover:text-gray-300">Bruce Willis</a>
                        <div class="text-sm truncate text-gray-400">Pulp Fiction, Split, asdfasdfasdfThe Sixth Sense</div>
                    </div>
                </div>
                
            
            </div>       
            {{-- end popular movies --}}  
        </div>
        
    </div>
@endsection