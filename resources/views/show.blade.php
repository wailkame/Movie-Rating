@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/images/dna.jpg" alt="dna" class="w-96">
            <div class="mt-3 md:ml-24">
                <h2 class="text-4xl font-semibold">DNA Hijack (2020)</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-yellow-600 w-3" viewBox="0 0 24 24"><path d="M12 20.1l5.82 3.682c1.066.675 2.37-.322 2.09-1.584l-1.543-6.926 5.146-4.667c.94-.85.435-2.465-.799-2.567l-6.773-.602L13.29.89a1.38 1.38 0 0 0-2.581 0l-2.65 6.53-6.774.602C.052 8.126-.453 9.74.486 10.59l5.147 4.666-1.542 6.926c-.28 1.262 1.023 2.26 2.09 1.585L12 20.099z" data-name="star"></path></svg>
                    </span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span >Feb 20, 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, Thriller, Drama</span>
                </div>
                <p class="text-gray-300 mt-8">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto, voluptas illo? Perferendis incidunt dolorum autem, doloremque aperiam, dolor modi vero tempora, possimus dolore accusamus? Suscipit, harum! Dolorum repellat nisi id!</p>
                
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div >
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div class="ml-3">
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-yellow-500 text-gray-800 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
                        <svg class="w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM7 6l8 4-8 4V6z"/></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>

            </div>
        </div>
    </div> 
    {{-- end movie info --}}


    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-8">
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/parasite-sm.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-600">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Character name
                        </div>
                    </div>
                </div>
    
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/parasite-sm.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-600">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Character name
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/images/parasite-sm.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-600">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Character name
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/images/parasite-sm.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-600">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Character name
                        </div>
                    </div>
                </div>


                <div class="mt-8">
                    <a href="#">
                        <img src="/images/parasite-sm.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-600">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Character name
                        </div>
                    </div>
                </div>


                <div class="mt-8">
                    <a href="#">
                        <img src="/images/parasite-sm.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-600">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Character name
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- end movie cast --}}

    <div class="movie-images border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1  sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-3 gap-16">
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/parasite-sm.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150" >
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-600">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Character name
                        </div>
                    </div>
                </div>
    
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/parasite-sm.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-600">Real Name</a>
                        <div class="text-gray-400 text-sm">
                            Character name
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection

