<nav class="border-b border-gray-800">
    <div class="container mx-auto flex px-4 flex-col md:flex-row items-center justify-between px-4 py-6 w-4/5">
        <ul class="flex flex-col md:flex-row items-center">
            <li>
                <a href="{{ route('movies.index') }}">
                    <img src="/img/mainlogo.png" alt="" class="w-28">
                </a>
            </li>
            <li class="md:ml-16 mt-3 md:mt-0">
                <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
            </li>
            <li class="md:ml-10 mt-3 md:mt-0">
                <a href="{{ route('tv.index') }}" class="hover:text-gray-300">TV Shows</a>
            </li>
            <li class="md:ml-10 mt-3 md:mt-0">
                <a href="{{ route('actors.index') }}" class="hover:text-gray-300">Actors</a>
            </li>
        </ul>
        <div class="flex flex-col md:flex-row items-center">
            <livewire:search-dropdown />
            <div class="md:ml-4 mt-3 md:mt-0">
                <a href="#">
                    <img src="/img/me.jpg" alt="profile_avatar" class="rounded-full w-8 h-8">
                </a>
            </div>
        </div>
    </div>
</nav>
