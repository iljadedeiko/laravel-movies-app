@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16 w-4/5">
        <div class="now-playing-movies border-b border-gray-800 pb-16">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div> <!--end now-playing-->

        <div class="popular-movies py-16">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularMovies as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"/>
                @endforeach
            </div>
        </div><!--end popular-movies-->
    </div>
@endsection