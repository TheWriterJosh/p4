@extends('layouts.master')

@section('title')
    Let's go!
@stop

@section('content')
<div class="big">
  <h2>Enter a destination!</h2>
  <form method='POST' action='/'>
    {{ csrf_field() }}
    <label>Destination:</label>
      <input
        type='text'
        name='destination'
        id='destination'
        value='{{ old('destination') }}'>
      <div class='error'>{{ $errors->first('destination')}}</div>
      <br>
    <label>Type of Destination (beach, city, region, national park?):</label>
      <input
        type='text'
        name='type'
        id='type'
        value='{{ old('type') }}'>
      <div class='error'>{{ $errors->first('type')}}</div>
      <br>
    <label>Country:</label>
      <input
        type='text'
        name='country'
        id='country'
        value='{{ old('country') }}'>
        <div class='error'>{{ $errors->first('country')}}</div>
        <br>
    <label>Continent:</label>
      <input
        type='text'
        name='continent'
        id='country'
        value='{{ old('continent') }}'>
        <div class='error'>{{ $errors->first('continent')}}</div>
        <br>
    <label>What year do you want to go (YYYY)?</label>
      <input
        type='text'
        name='year'
        id='year'
        value='{{ old('year') }}'>
        <div class='error'>{{ $errors->first('year')}}</div>
      <br>
    <input type='submit' value='Place it in the Bucket'><br><br>
    <p>Or <a href="/">go back</a> to your bucketlist.</p>
  </form>
</div>
@stop

@section('body')
    <script src="/js/books/show.js"></script>
@stop
