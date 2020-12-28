@extends('layouts.main')


@section('content')
    <div class="container mx-auto px-4 py-16">
        <div class="popular-actors">
            <h2 class="uppercase tracking-wider text-yellow-600 text-lg font-semibold">Popular Actors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-8">
                
                @foreach ($popularActors as $actor)
                    @if ($loop->index < 9)
                        <div class="actor mt-8">
                            <a href="{{route('actors.show', $actor['id'])}}">
                                <img class="hover:opacity-75 transition ease-in-out duration-150" src="" alt="profile_image">
                                {{-- https://ui-avatars.com/api/?size=235&name=JK --}}
                            </a>
                            <div class="mt-2">
                                <a href="{{route('actors.show', $actor['id'])}}" class="text-lg hover:text-gray-300">{{$actor['name']}}</a>
                                <div class="text-sm truncate text-gray-400">{{$actor['known_for']}}</div>
                            </div>
                        </div>
                    @else
                        @break
                    @endif
                    
                @endforeach
                
            
            </div>       
            
        </div> {{-- end popular Actors --}}
        <div class="page-load-status">
            <div class="flex justify-center my-8">
                <p class="infinite-scroll-request spinner my-8 text-4xl">&nbsp;</p>
            </div>
            <p class="infinite-scroll-last">End of content</p>
            <p class="infinite-scroll-error">No more pages to load</p>
        </div>
        {{-- <div class="flex justify-between mt-16">

            @if ($previous)
                <a href="/actors/page/{{$previous}}">Previous</a>
            @else
                <div></div>
            @endif

            @if ($next)
                <a href="/actors/page/{{$next}}">Next</a>
            @else
            <div></div>
            @endif

        </div>  --}}
        {{-- add next & previous button --}}

    </div>
@endsection

@section('script')
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script>
    var elem = document.querySelector('.grid');
    var infScroll = new InfiniteScroll( elem, {
    // options
    path: '/actors/page/@{{#}}',
    append: '.actor',
    status: '.page-load-status',
    // history: false,
    });
</script>
@endsection