@extends('layouts.master')


@section('title')
    Bucket List
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    <link href="/css/bucketlist/show.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
    @if($destination)
        <h1>Show destination: {{ $destination }}</h1>
    @else
        <h1>No destination chosen</h1>
    @endif
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/destination/show.js"></script>
@stop
