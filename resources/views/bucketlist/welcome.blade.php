@extends('layouts.master')

@section('head')
    <link href='/css/app.css' rel='stylesheet'>
@endsection

@section('title')
  Your Bucketlist!
@endsection

@section('content')
  <h1>Welcome to the Bucketlist Manager!</h1>
  <p>This app lets you track the destinations you want to visit before you kick the bucket.</p>
  <p>To get started <a href='/auth/login'>log in</a> or <a href='/auth/register'>register</a>.</p>
@endsection
