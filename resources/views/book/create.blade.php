@extends('layouts.master')

@section('title')
    Let's go!
@stop

@section('content')
<h2>Enter a destination!</h2>
@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
@endif
<form method='POST' action='/books'>
  {{ csrf_field() }}
  <input type='text' name='title'>
  <input type='submit' value='Submit'>
</form>
@stop

@section('body')
    <script src="/js/books/show.js"></script>
@stop
