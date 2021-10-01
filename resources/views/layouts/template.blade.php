<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics-@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body >
    {{-- HEADER --}}
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
            <a href="{{ url('/')}}"><img src="{{ asset('img/dc-logo.png') }}" alt="logo"></a>
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
    {{-- BANNER --}}
    <div id="banner">
        <div class="bannerbg">
            @yield('button-current-series')
        </div>
    </div>
    {{-- PRODUCTS --}}
    <section>
        @yield('Products')
    </section>
    {{-- MAIN --}}
    <main>
        <div class="main_box">
          <div class="container">
            <div class="oldcol">
              <div class="trecol">
                <div class="col1">
                  <ul>
                    <h4>DC COMICS</h4>
                    <li><a href="#">Characters</a></li>
                    <li><a href="#">Comics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">News</a></li>
                    <h4>SHOP</h4>
                    <li><a href="#">Shop DC</a></li>
                    <li><a href="#">Shop DC Collectibles</a></li>
                  </ul>
                  <div class="col2">
                    <ul>
                      <h4>DC</h4>
                      <li><a href="#">Terms Of Use</a></li>
                      <li><a href="#">Privacy policy (New)</a></li>
                      <li><a href="#">Ad Choices</a></li>
                      <li><a href="#">Advertising</a></li>
                      <li><a href="#">Jobs</a></li>
                      <li><a href="#">Subscriptions</a></li>
                      <li><a href="#">Talent Workshops</a></li>
                      <li><a href="#">CPSC Certificates</a></li>
                      <li><a href="#">Ratings</a></li>
                      <li><a href="#">Shop Help</a></li>
                      <li><a href="#">Contact Us</a></li>
                    </ul>
                  </div>
                  <div class="col3">
                    <ul>
                      <h4>SITES</h4>
                      <li><a href="#">DC</a></li>
                      <li><a href="#">MAD Magazine</a></li>
                      <li><a href="#">DC Kids</a></li>
                      <li><a href="#">DC Universe</a></li>
                      <li><a href="#">DC Power Visa</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <img src="{{ asset('img/dc-logo-bg.png') }}" alt="logo" />
            </div>
          </div>
        </div>
      </main>
    {{-- FOOTER --}}
    <footer>
        <div class="footer_box">
          <div class="container">
            <div class="log">
              <div>
                <button class="button-footer"><a href="#">SIGN-UP NOW!</a></button>
              </div>
              <ul class="log">
                <li>
                  <h4><a href="#">FOLLOW US</a></h4>
                </li>
                <li>
                  <img src="{{ asset('img/footer-facebook.png') }}" alt="facebook" />
                </li>
                <li>
                  <img src="{{ asset('img/footer-twitter.png') }}" alt="twitter" />
                </li>
                <li>
                  <img src="{{ asset('img//footer-youtube.png') }}" alt="youtube" />
                </li>
                <li>
                  <img src="{{ asset('img//footer-pinterest.png') }}" alt="pinterest" />
                </li>
                <li>
                  <img src="{{ asset('img//footer-periscope.png') }}" alt="periscope" />
                </li>
              </ul>
            </div>
          </div>
        </div>
    </footer>
</body>
</html>