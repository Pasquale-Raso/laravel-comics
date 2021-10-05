@extends('layouts.template');
{{-- TITLE --}}
@section('title')Home @endsection
{{-- BUTTON CURRENT SERIES --}}
@section('button-current-series')
<div class="container">
<button class="button-banner"><a href="#">COMICS</a></button>
</div>
@endsection
{{-- PRODUCTS --}}
@section('Products')
    <div class="products-box">
      <div class="container">
        <div class="card-box ">
            @foreach ($comics as $comic)
            <div class="card">
            <a href="{{url("/comics/$loop->index") }}"><img src="{{$comic['thumb']}}" alt=""></a>
            <h4>{{$comic['title']}}</h4>
          </div>
            @endforeach
            <button class="button-products"><a href="#">LOAD MORE</a></button>
        </div>
      </div>
    </div>
@endsection

{{-- NAVBAR ICONS --}}
@section('Navbaricons')
<section class="navbar_blu_line">
  <div class="container">
    <ul>
      <li >
        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="DIGITAL COMICS">
        <p>DIGITAL COMICS</p>
      </li>
      <li >
        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="DC MERCHANDISE">
        <p>DC MERCHANDISE</p>
      </li>
      <li >
        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="SUBSCRIPTIONS">
        <p>SUBSCRIPTIONS</p>
      </li>
      <li >
        <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="COMIC SHOP LOCATOR">
        <p>COMIC SHOP LOCATOR</p>
      </li>
      <li >
        <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="DIGITAL COMICS">
        <p>DC POWER VISA</p>
      </li>
    </ul>
  </div>
</div>
</section>
@endsection




