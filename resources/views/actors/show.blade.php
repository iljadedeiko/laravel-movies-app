@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 w-4/5 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="{{ $actor['profile_path'] }}" alt="profile image"
                class="w-96">
                <ul class="flex items-center mt-4">
                    @if($social['facebook'])
                        <li class="pr-3">
                            <a href="{{ $social['facebook'] }}" title="Facebook" target="_blank">
                                <img src="/img/facebook-icon.png" alt="" class="w-10">
                            </a>
                        </li>
                    @endif

                    @if($social['instagram'])
                        <li class="pr-3">
                            <a href="{{ $social['instagram'] }}" title="Instagram" target="_blank">
                                <img src="/img/insta-icon.png" alt="" class="w-10">
                            </a>
                        </li>
                    @endif

                    @if($social['twitter'])
                        <li class="pr-3">
                            <a href="{{ $social['twitter'] }}" title="Twitter" target="_blank">
                                <img src="/img/twitter-icon.png" alt="" class="w-10">
                            </a>
                        </li>
                    @endif

                    @if ($actor['homepage'])
                        <li class="pr-3">
                            <a href="{{ $actor['homepage'] }}" title="Website" target="_blank">
                                <img src="/img/website-icon.png" alt="" class="w-10">
                            </a>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $actor['name'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-2">
                    <img src="/img/birthday-icon.png" alt="star" class="w-4">
                    <span class="ml-2">{{ $actor['birthday'] }} ({{ $actor['age'] }} years old) in {{ $actor['place_of_birth'] }}</span>
                </div>

                <p class="text-gray-300 mt-8">
                    {{ $actor['biography'] }}
                </p>

                <h4 class="font-semibold mt-12">Known For</h4>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                    @foreach ($knownForMovies as $movie)
                        <div class="mt-4">
                            <a href="{{ route('movies.show', $movie['id']) }}"><img src="{{ $movie['poster_path'] }}"
                            alt="poster" class="hover:opacity-75 transition ease-in-out duration-150"></a>
                            <a href="{{ route('movies.show', $movie['id']) }}" class="text-sm leading-normal block text-gray-400 hover:text-white mt-1">{{ $movie['title'] }}</a>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div> <!-- end movie-info-->

    <div class="credits border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 w-4/5">
            <h2 class="text-4xl font-semibold">Credits</h2>
            <ul class="list-disc leading-loose pl-5 mt-8">
                @foreach($credits as $credit)
                    <li>{{ $credit['release_year'] }} &middot; <strong>{{ $credit['title'] }}</strong> as {{ $credit['character'] }}</li>
                @endforeach
            </ul>
        </div>
    </div> <!--end credits-cast-->


@endsection
