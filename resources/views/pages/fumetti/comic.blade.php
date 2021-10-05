@extends('layouts.template');
@section('title')Fumetti @endsection
@section('Products')
<div class="box-comic ">
    <div class="line-blue">
        <div class="container" >
            <img class="img-cover" src="{{$comic['thumb']}}" alt="photo">
        </div>
    </div>
    <div class="container">
        <div class="box-detail-comic">
            <div class="section-a">
                <h1 class="h1big">{{$comic['title']}}</h1>
                <div class="box-green">
                    <div class="box-green-1">
                        <div>
                            <p>U.S. Price: <b>{{$comic['price']}}</b></p>
                        </div>
                        <div>
                            <p>AVAILABLE</p>
                        </div>
                    </div>
                    <div class="box-green-2">
                        <p>Check Availability &#9660;</p>
                    </div>
                </div>
                <h5>{{$comic['description']}}</h5>
            </div>
            <div class="section-b">
                <p>ADVERTISEMENT</p>
                <img src="{{ asset('img/adv.jpg') }}"alt="advertisement"></a>
            </div>
        </div>        
    </div>
    <div class="section-grey">
        <div class="container">
            <div class="box-section-grey">
                <div class="box1-section-grey">
                    <h4>Talent</h4>
                    <div class="box-art">
                        <div class="art">
                            <h6>Art by:</h6>
                        </div>
                        <div class="artists">
                            @foreach($comic['artists'] as $artist)
                            <span>{{$artist}}</span>,
                            @endforeach
                        </div>
                    </div>
                    <div class="box-written">
                        <div class="written">
                            <h6>Written by:</h6>
                        </div>
                        <div class="writers">
                            @foreach($comic['writers'] as $writer)
                            <span>{{$writer}}</span>,
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="box2-section-grey">
                    <h4>Specs</h4>
                    <div class="box-Series">
                        <div class="series">
                            <h6>Series:</h6>
                        </div>
                        <div class="serie">
                            <h6>{{$comic['series']}}</h6>
                        </div>
                    </div>
                    <div class="box-us">
                        <div class="us">
                            <h6>U.S. Price:</h6>
                        </div>
                        <div class="price">
                            <h6>{{$comic['price']}}</h6>
                        </div>
                    </div>
                    <div class="box-dates">
                        <div class="dates">
                            <h6>On Sale Date:</h6>
                        </div>
                        <div class="'date">
                            <h6>{{$comic['sale_date']}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @include('includes.navbaricons-white-line')
@endsection