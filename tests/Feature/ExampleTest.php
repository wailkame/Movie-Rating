<?php

namespace Tests\Feature;

use Tests\TestCase;

use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // send fakePopularMovies when calling this url with wildcard
        Http::fake([
            'https://api.themoviedb.org/3/movie/*' => $this->fakePopularMovies()
        ]);
        // dd($this->fakePopularMovies());
        $response = $this->get(route('movies.index'));
        
        $response->assertSuccessful();
        $response->assertSee('fake response');

        
    
    }
    public function search_dropdown_works()
    {
        Http::fake([
            'https://api.themoviedb.org/3/search/movie/*' => $this->fakeSearchMovies()
        ]);

        Livewire::test('search-dropdown')
            ->assertDontSee('Black')
            ->set('search', 'Black')
            ->assertSee('Fake result');
    }

    private function fakePopularMovies()
    {
        return Http::response([
            "results" =>[
                [
                "adult" => false,
                "backdrop_path" => "/cjaOSjsjV6cl3uXdJqimktT880L.jpg",
                "genre_ids" =>  [
                    12,
                    14,
                    10751,
                    16,
                ],
                "id" => 529203,
                "original_language" => "en",
                "original_title" => "The Croods: A New Age",
                "overview" => "After leaving their cave, the Croods encounter their biggest threat since leaving: another family called the Bettermans, who claim and show to be better and evolved. Grug grows suspicious of the Betterman parents, Phil and Hope,  as they secretly plan to break up his daughter Eep with her loving boyfriend Guy to ensure that their daughter Dawn has a loving and smart partner to protect her.",
                "popularity" => 2820.988,
                "poster_path" => "/tK1zy5BsCt1J4OzoDicXmr0UTFH.jpg",
                "release_date" => "2020-11-25",
                "title" => "fake response",
                "video" => false,
                "vote_average" => 8.1,
                "vote_count" => 545,
                ]]
                ], 200);
    }

    private function fakeSearchMovies()
    {
        return Http::response([
            "results" => [
                [
                    "adult" => false,
                    "backdrop_path" => "/6ELJEzQJ3Y45HczvreC3dg0GV5R.jpg",
                    "genre_ids" => [
                        28,
                        12,
                        14,
                        878
                    ],
                    "id"=> 284054,
                    "original_language"=> "en",
                    "original_title"=> "Black Panther",
                    "overview" => "King T'Challa returns home from America to the reclusive, technologically advanced African nation of Wakanda to serve as his country's new leader. However, T'Challa soon finds that he is challenged for the throne by factions within his own country as well as without. Using powers reserved to Wakandan kings, T'Challa assumes the Black Panther mantel to join with girlfriend Nakia, the queen-mother, his princess-kid sister, members of the Dora Milaje (the Wakandan 'special forces') and an American secret agent, to prevent Wakanda from being dragged into a world war.",
                    "popularity" => 79.821,
                    "poster_path" => "/uxzzxijgPIY7slzFvMotPv8wjKA.jpg",
                    "release_date" => "2018-02-13",
                    "title" => "Black Panther",
                    "video" => false,
                    "vote_average" => 7.4,
                    "vote_count" => 16497
            ]]
        ]);
    }

}