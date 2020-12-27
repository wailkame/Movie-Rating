@extends('layouts.main')


@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="popular-actors">
            <h2 class="uppercase tracking-wider text-yellow-600 text-lg font-semibold">Popular Actors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-8">
                
                @foreach ($popularActors as $actor)
                    @if ($loop->index < 9)
                        <div class="actor mt-8">
                            <a href="#">
                                <img class="hover:opacity-75 transition ease-in-out duration-150" src="https://ui-avatars.com/api/?size=235&name=JK" alt="profile_image">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg hover:text-gray-300">{{$actor['name']}}</a>
                                <div class="text-sm truncate text-gray-400">{{$actor['known_for']}}</div>
                            </div>
                        </div>
                    @else
                        @break
                    @endif
                    
                @endforeach
                
            
            </div>       
            
        </div> {{-- end popular Actors --}}
        
        <div class="flex justify-between mt-16">
            @if ($previous)
                <a href="/actors/page/{{$previous}}">Previous</a>
            @endif

            @if ($next)
                <a href="/actors/page/{{$next}}">Next</a>
            @endif
        </div>

    </div>
@endsection