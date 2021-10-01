<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics-home</title>
</head>
<body>
    <img src="{{ asset('img/dc-logo.png') }}" alt="logo">
    <h1>HOME</h1>
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
</body>
</html>