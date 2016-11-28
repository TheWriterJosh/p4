@extends('layouts.master')

@section('title')
  Your Destinations!
@stop

@section('content')
  <h1>Here's your bucketlist!</h1>
  <p>Add another destination <a href="/create"> here.</a></p>
  <div class='destinations'>
    @foreach($destinations as $destination)
        <h2>{{ $destination->destination }}</h2>
        <p>{{ $destination->type }}, {{ $destination->country }}</p>
        <h4>{{ $destination->continent }} - {{ $destination->year }}</h4>
    @endforeach
 </div>

@stop

@section('body')
    <script src="/js/bucketlist/show.js"></script>
@stop
