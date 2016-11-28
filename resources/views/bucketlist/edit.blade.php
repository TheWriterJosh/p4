@extends('layouts.master')

@section('title')
    Let's go!
@stop

@section('content')
<h2>Make a mistake? Fix it here!</h2>
<form method='POST' action='/{{$destination->id}}'>
  {{ method_field('PUT') }}
  {{ csrf_field() }}
  <input type='hidden' name='id' value='{{ $destination->id }}'>
  <label>Destination:</label>
    <input
      type='text'
      name='destination'
      id='destination'
      value='{{ old('destination', $destination->destination) }}'>
    <div class='error'>{{ $errors->first('destination')}}</div>
    <br>
  <label>Type of Destination (beach, city, region, national park?):</label>
    <input
      type='text'
      name='type'
      id='type'
      value='{{ old('type', $destination->type) }}'>
    <div class='error'>{{ $errors->first('type')}}</div>
    <br>
  <label>Country:</label>
    <input
      type='text'
      name='country'
      id='country'
      value='{{ old('country', $destination->country) }}'>
      <div class='error'>{{ $errors->first('country')}}</div>
      <br>
  <label>Continent:</label>
    <input
      type='text'
      name='continent'
      id='country'
      value='{{ old('continent', $destination->continent) }}'>
      <div class='error'>{{ $errors->first('continent')}}</div>
      <br>
  <label>What year do you want to go (YYYY)?</label>
    <input
      type='text'
      name='year'
      id='year'
      value='{{ old('year', $destination->year) }}'>
      <div class='error'>{{ $errors->first('year')}}</div>
    <br><br>
  <input type='submit' value='Save this Destination'>
</form>
@stop

@section('body')
    <script src="/js/books/show.js"></script>
@stop
