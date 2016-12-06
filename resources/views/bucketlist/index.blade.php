@extends('layouts.master')

@section('head')
    <link href='/css/app.css' rel='stylesheet'>
@endsection

@section('title')
  Your Destinations!
@endsection

@section('content')
  <h1>Here's your bucketlist!</h1>
  @if(sizeof($destinations) == 0)
      <p>You haven't added any destinations to your bucketlist, so <a href='/bucketlist/create'>get started</a>!</p>
  @else
  <div class="section">
      @foreach($destinations as $destination)
          <div class='col-sm-4 square'>
            <a href='/{{ $destination->id }}'><h2 class='truncate'>{{ $destination->destination }}</h2></a>
            <p>{{ $destination->type }}, {{ $destination->country }}</p>
            <h4>{{ $destination->continent }} - {{ $destination->year }}</h4>
            <a href='/{{ $destination->id }}/edit'>Edit</a><br>
            <a href='/{{ $destination->id }}'>View</a><br>
          </div>
      @endforeach
  </div>
  @endif
@endsection
