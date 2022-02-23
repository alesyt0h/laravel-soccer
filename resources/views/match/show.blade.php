@extends('layouts.main')

@section('title', $match)

@section('content')
    <h1>This is the view of {{$match}}, later on, this will display information about that match</h1>
@endsection
