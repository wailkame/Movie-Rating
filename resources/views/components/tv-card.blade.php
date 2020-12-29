<div class="mt-8">
    <a href="{{route('tv.show', $tvshow['id'])}}">
        <img src="" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150 ">
    </a>
    <div class="mt-2">
    <a href="{{route('tv.show', $tvshow['id'])}}" class="text-lg mt-2 hover:text-gray-600">{{ $tvshow['name']}}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-yellow-600 w-3" viewBox="0 0 24 24"><path d="M12 20.1l5.82 3.682c1.066.675 2.37-.322 2.09-1.584l-1.543-6.926 5.146-4.667c.94-.85.435-2.465-.799-2.567l-6.773-.602L13.29.89a1.38 1.38 0 0 0-2.581 0l-2.65 6.53-6.774.602C.052 8.126-.453 9.74.486 10.59l5.147 4.666-1.542 6.926c-.28 1.262 1.023 2.26 2.09 1.585L12 20.099z" data-name="star"></path></svg>
            </span>
            <span class="ml-1">{{$tvshow['vote_average']}}</span>
            <span class="mx-2">|</span>
            <span >{{$tvshow['first_air_date']}}</span>
        </div>
        <div class="text-gray-400 text-sm">
            {{$tvshow['genres']}}
        </div>
    </div>
</div>