<div class="relative md:ml-4 mt-3 md:mt-0">
    
    <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-inner focus:ring-2" placeholder="Search">
    
    <div class="absolute top-0">
        <img src="/images/icons/search.png" class="w-4 mt-2 ml-2">
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-4"></div>

    @if (strlen($search) > 2)
        <div class="absolute bg-gray-800 text-sm rounded w-64 mt-4">
            
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-gray-700">
                            <a href="{{route('movies.show', $result['id'])}}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                               
                                @if ($result['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w500/{{$result['poster_path']}}" alt="poster " class="w-8">
                                @else
                                    <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                                @endif
                                
                                <span class="ml-4">{{$result['title']}}</span>
                            </a>
                        </li>
                    @endforeach
                    
                </ul>
            
            @else
                <div class="px-3 py-3">No results.</div>
            @endif

        </div>
    @endif

</div>