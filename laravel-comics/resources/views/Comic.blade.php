@extends('layouts.default')

@section('content')

<div class="comic" >
    <div class="containerImage">
      <div class="imageComic">
        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
        <span class="target">{{$comic['type']}}</span>
      </div>
    </div>
    <div class="content">
      <div class="description">
        <h1>{{$comic['title']}}</h1>
        <div class="buy">
          <div class="price">
            <span class="price_color">U.S. Price : {{$comic['price']}}</span>
            <span class="available">Available</span>
          </div>
          <div class="checkAvailability">
            <span>Check Availability</span>
          </div>
        </div>
        <p>{{$comic['description']}}</p>
      </div>
      <div class="adv">
        <span>Advertisement</span>
        <img src="{{asset('img/adv.jpg')}}" alt="adv">
      </div>
    </div>
  </div>

@endsection