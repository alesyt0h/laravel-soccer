@extends('layouts.main')

@section('title', $match ?? 'Matches')

@section('content')

    @if ($match)
        <h1>This is the view of {{$match}}, later on, this will display information about that match</h1>
    @else
        <x-listing :entity="$matches" />
    @endif
@endsection
