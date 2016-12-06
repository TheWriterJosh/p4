@extends('layouts.master')

@section('head')
    <link href='/css/app.css' rel='stylesheet'>
@stop

@section('title')
  Your Bucketlist!
@stop

@section('content')
  <h1>Welcome to the Bucketlist Manager!</h1>
  <p>This app lets you track the destinations you want to visit before you kick the bucket.</p>
  <p>To get started <a href='/auth/login'>log in</a> or <a href='/auth/register'>register</a>.
@stop

@section('body')
    <script src="/js/bucketlist/show.js"></script>
@stop
