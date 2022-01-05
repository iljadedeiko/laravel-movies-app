@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex w-4/5">
            <img src="/img/parasite.jpg" alt="parasite" class="w-96">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
                <div class="flex items-center text-gray-400 text-sm mt-2">
                    <img src="/img/star-icon.png" alt="star" class="w-4">
                    <span class="ml-1">85%</span>
                    <span class="mx-2"> | </span>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2"> | </span>
                    <span>Action, Thriller, Drama</span>
                </div>

                <p class="text-gray-300 mt-8">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate explicabo illo, laudantium quaerat quam quisquam!
                    A ab adipisci corporis ea, eum facilis illo iure libero, nobis odit officia omnis pariatur quasi qui quia quos reiciendis.
                    Minus, optio, voluptates. Cumque delectus deserunt distinctio dolorum ea iure labore libero odit tenetur, vero!
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600
                    transition ease-in-out duration-150">
                        <img src="/img/play-button.png" alt="" class="w-6 fill-current">
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div> <!-- end movie-info-->

@endsection
