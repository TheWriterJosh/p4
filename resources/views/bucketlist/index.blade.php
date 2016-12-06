@extends('layouts.master')

@section('head')
    <link href='/css/app.css' rel='stylesheet'>
@stop

@section('title')
  Your Destinations!
@stop

@section('content')
  <h1>Here's your bucketlist!</h1>
  <div class="section">
      @foreach($destinations as $destination)
          <div class='col-sm-4 square'>
            <a href='/{{ $destination->id }}'><h2 class='truncate'>{{ $destination->destination }}</h2></a>
            <p>{{ $destination->type }}, {{ $destination->country }}</p>
            <h4>{{ $destination->continent }} - {{ $destination->year }}</h4>
            <br>
            <a href='/{{ $destination->id }}/edit'>Edit</a><br>
            <a href='/{{ $destination->id }}'>View</a><br>
          </div>
    </div>
    @endforeach
    <br>
@stop
@section('body')
    <script src="/js/bucketlist/show.js"></script>
@stop
