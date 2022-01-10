<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_correct_info()
    {
        Http::fake([
            'https://themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
            'https://themoviedb.org/3/movie/now_playing' => $this->fakeNowPlayingMovies(),
            'https://themoviedb.org/3/movie/movie/list' => $this->fakeGenres(),
        ]);

        $response = $this->get(route('movies.index'));

        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
        $response->assertSee('Fake Movie');
        $response->assertSee('Action, Adventure, Science Fiction');
        $response->assertSee('Now Playing');
        $response->assertSee('Now Playing Fake Movie');
    }

    /** @test */
    public function the_search_dropdown_works_correctly()
    {
        Http::fake([
            'https://themoviedb.org/3/search/movie?query=jumanju' => $this->fakeSearchMovies(),
        ]);

        Livewire::test('search-dropdown')
            ->assertDontSee('jumanji')
            ->set('search', 'jumanji')
            ->assertSee('Jumanji');
    }

    private function fakeSearchMovies()
    {
        return Http::response([
            'results' => [
                [
                    "popularity" => 406.677,
                    "vote_count" => 2607,
                    "video" => false,
                    "poster_path" => "/xBHvZcjRiWyobQ9kxBhO6B2dtRI.jpg",
                    "id" => 419704,
                    "adult" => false,
                    "backdrop_path" => "/4fvsi76GYGhiIHfui6876uff.jpg",
                    "original_language" => "en",
                    "original_title" => "Jumanji",
                    "genre_ids" => [
                        28,
                        12,
                        878,
                    ],
                    "title" => "Jumanji",
                    "vote_average" => 6,
                    "overview" => "Fake movie description.",
                    "release_date" => "2019-09-17"
                ]
            ]
        ], 200);
    }

    /** @test */
    public function the_movie_page_shows_the_correct_info()
    {
        Http::fake([
            'https://themoviedb.org/3/movie/*' => $this->fakeSingleMovie(),
        ]);

        $response = $this->get(route('movies.show', 12345));
        $response->assertSee('Fake Jumanji');
        $response->assertSee('Jeanne McCarthy');
        $response->assertSee('Casting Director');
        $response->assertSee('Dwayne Johnson');
    }

    private function fakePopularMovies()
    {
        return Http::response([
            'results' => [
                [
                    "popularity" => 406.677,
                    "vote_count" => 2607,
                    "video" => false,
                    "poster_path" => "/xBHvZcjRiWyobQ9kxBhO6B2dtRI.jpg",
                    "id" => 419704,
                    "adult" => false,
                    "backdrop_path" => "/4fvsi76GYGhiIHfui6876uff.jpg",
                    "original_language" => "en",
                    "original_title" => "Fake Movie",
                    "genre_ids" => [
                        28,
                        12,
                        878,
                    ],
                    "title" => "Fake Movie",
                    "vote_average" => 6,
                    "overview" => "Fake movie description.",
                    "release_date" => "2019-09-17"
                ]
            ]
        ], 200);
    }

    private function fakeNowPlayingMovies()
    {
        return Http::response([
            'results' => [
                [
                    "popularity" => 406.677,
                    "vote_count" => 2607,
                    "video" => false,
                    "poster_path" => "/xBHvZcjRiWyobQ9kxBhO6B2dtRI.jpg",
                    "id" => 419704,
                    "adult" => false,
                    "backdrop_path" => "/5BwqwxMEjeFtdknRV792Svo0K1v.jpg",
                    "original_language" => "en",
                    "original_title" => "Now Playing Fake Movie",
                    "genre_ids" => [
                        28,
                        12,
                        878,
                    ],
                    "title" => "Now Playing Fake Movie",
                    "vote_average" => 6,
                    "overview" => "Fake movie description.",
                    "release_date" => "2019-09-17",
                ]
            ]
        ], 200);
    }

    private function fakeGenres()
    {
        return Http::response([
            'results' => [
                [
                    "id" => 28,
                    "name" => "Action"
                ],
                [
                    "id" => 12,
                    "name" => "Adventure"
                ],
                [
                    "id" => 16,
                    "name" => "Animation"
                ],
                [
                    "id" => 18,
                    "name" => "Drama"
                ],
                [
                    "id" => 10751,
                    "name" => "Family"
                ],
                [
                    "id" => 14,
                    "name" => "Fantasy"
                ],
                [
                    "id" => 27,
                    "name" => "Horror"
                ],
                [
                    "id" => 10402,
                    "name" => "Music"
                ],
                [
                    "id" => 9648,
                    "name" => "Mystery"
                ],
                [
                    "id" => 10749,
                    "name" => "Romance"
                ],
                [
                    "id" => 878,
                    "name" => "Science Fiction"
                ],
                [
                    "id" => 10770,
                    "name" => "TV Movie"
                ],
                [
                    "id" => 53,
                    "name" => "Thriller"
                ],
                [
                    "id" => 37,
                    "name" => "Western"
                ],
            ]
        ], 200);
    }

    private function fakeSingleMovie()
    {
        return Http::response([
            'results' => [
              "adult" => false,
              "backdrop_path" => "/1Rr5SrvHxMXHu5RjKpaMba8VTzi.jpg",
              "belongs_to_collection" => [

              ],
              "budget" => 200000000,
              "genres" => [

              ],
              "homepage" => "https://www.spidermannowayhome.movie",
              "id" => 634649,
              "imdb_id" => "tt10872600",
              "original_language" => "en",
              "original_title" => "Jumanji",
              "overview" => "Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange th ",
              "popularity" => 8745.819,
              "poster_path" => "/1g0dhYtq4irTY1GPXvft6k4YLjm.jpg",
              "production_companies" => [

               ],
              "production_countries" => [

               ],
              "release_date" => "2021-12-15",
              "revenue" => 1536235195,
              "runtime" => 148,
              "spoken_languages" => [

               ],
              "status" => "Released",
              "tagline" => "The Multiverse unleashed.",
              "title" => "Spider-Man: No Way Home",
              "video" => false,
              "vote_average" => 8.4,
              "vote_count" => 3851,
              "credits" => [

               ],
              "videos" => [
                    "results" => [
                        [
                            "iso_639_1" => "en",
                            "iso_3166_1" => "US",
                            "name" => "Mirror Dimension Clip",
                            "key" => "Bh8NeyejykU",
                            "site" => "YouTube",
                            "size" => 1080,
                            "type" => "Clip",
                            "official" => true,
                            "published_at" => "2022-01-05T17:00:13.000Z",
                            "id" => "61d66132e194b000414703fc",
                        ]
                    ]
               ],
              "images" => [
                    "backdrops" => [
                        [
                            "aspect_ratio" => 1.777777777778,
                            "height" => 1125,
                            "iso_639_1" => null,
                            "file_path" => "/1Rr5SrvHxMXHu5RjKpaMba8VTzi.jpg",
                            "vote_average" => 5.396,
                            "vote_count" => 12,
                            "width" => 2000,
                        ]
                    ],
                    "posters" => [
                        [

                        ]
                    ]
                ]
            ]
        ], 200);
    }
}
