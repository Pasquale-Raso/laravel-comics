<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics-home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body >
    <header>
        <div class="top-header">
            <div class="container top-header-text">
                <div>
                    <span>DC POWER</span><sup>TM</sup><span> VISA&#169;</span>
                </div>
                <div>
                    <span class="additional">ADDITIONAL DC SITES</span>
                </div>
            </div>
        </div>
        <div class="row container">
            <img src="{{ asset('img/dc-logo.png') }}" alt="logo">
            <ul>
                <li><a href="{{ route('characters')}}">CHARACTERS</a></li>
                <li><a href="{{ route('comics')}}">COMICS</a></li>
                <li><a href="{{ route('movies')}}">MOVIES</a></li>
                <li><a href="{{ route('tv')}}">TV</a></li>
                <li><a href="{{ route('games')}}">GAMES</a></li>
                <li><a href="{{ route('collectibles')}}">COLLECTIBLES</a></li>
                <li><a href="{{ route('videos')}}">VIDEOS</a></li>
                <li><a href="{{ route('fans')}}">FANS</a></li>
                <li><a href="{{ route('news')}}">NEWS</a></li>
                <li><a href="{{ route('shop')}}">SHOP</a></li>
            </ul>
        </div>
    </header>
    
</body>
</html>