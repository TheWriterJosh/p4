@extends('layouts.master')

@section('title')
    Confirm deletion: {{ $destination->destination }}
@endsection

@section('content')

    <h1>Confirm deletion</h1>
    <form method='POST' action='/{{ $destination->id }}'>

        {{ method_field('DELETE') }}

        {{ csrf_field() }}

        <h2>Are you sure you want to delete <em>{{ $destination->destination }}</em>?</h2>

        <input type='submit' value='Yes'>

    </form>

@endsection
