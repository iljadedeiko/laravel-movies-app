<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>

    <link rel="stylesheet" href="/css/app.css">

</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex px-4 items-center justify-between px-4 py-6 w-4/5">
            <ul class="flex items-center">
                <li>
                    <a href="#">
                        <img src="/img/mainlogo.png" alt="" class="w-28">
                    </a>
                </li>
                <li class="ml-16">
                    <a href="#" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="ml-10">
                    <a href="#" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="ml-10">
                    <a href="#" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none
                    focus:shadow-outline" placeholder="Search">
                    <div class="absolute top-0">
                        <img src="/svg/search-icon.svg" alt="" class="fill-current w-4 text-gray-500 mt-2 ml-2">
                    </div>
                </div>
                <div class="ml-4">
                    <a href="#">
                        <img src="/img/me.jpg" alt="profile_avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>