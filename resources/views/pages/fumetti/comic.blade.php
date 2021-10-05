@extends('layouts.template');
@section('title')Fumetti @endsection
@section('Products')
<div class="box ">
    <div class="container">
        <h1>{{$comic['title']}}</h1>
    </div>
</div>
    @include('includes.navbaricons-white-line')
@endsection