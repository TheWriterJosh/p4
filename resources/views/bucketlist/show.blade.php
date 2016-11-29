@extends('layouts.master')

@section('title')
    {{ $destination->title }}
@endsection

@section('head')
    <link href='css/app.css' rel='stylesheet'>
@endsection

@section('content')
    <section class="destination">
    <h1 class='truncate'>{{ $destination->destination }}</h1>
    <p>{{ $destination->type }}, {{ $destination->country }}</p>
    <h4>{{ $destination->continent }} - {{ $destination->year }}</h4>
    <a href='/{{ $destination->id }}/edit'>Edit</a><br>
    <a class='button' href='/{{ $destination->id }}/delete'>Delete</a>
    <br><br>
    <a class='return' href='/'>&larr; Back to your Bucketlist!</a>
  </section>
@endsection
