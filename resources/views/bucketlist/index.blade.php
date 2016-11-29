@extends('layouts.master')

@section('head')
    <link href='/css/app.css' rel='stylesheet'>
@stop

@section('title')
  Your Destinations!
@stop

@section('content')
  <h1>Here's your bucketlist!</h1>
  <p>Add another destination <a href="/create"> here.</a></p>
  <div class='destinations'>
    @foreach($destinations as $destination)
        <section class='destination'>
          <a href='/{{ $destination->id }}'><h2 class='truncate'>{{ $destination->destination }}</h2></a>
          <p>{{ $destination->type }}, {{ $destination->country }}</p>
          <h4>{{ $destination->continent }} - {{ $destination->year }}</h4>
          <br>
          <a href='/{{ $destination->id }}/edit'>Edit</a><br>
          <a href='/{{ $destination->id }}'>View</a><br>
        </section>
    @endforeach
 </div>

@stop

@section('body')
    <script src="/js/bucketlist/show.js"></script>
@stop
