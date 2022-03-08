@extends('layouts.main')

@section('title', $team ?? 'Teams')

@section('content')

    @if ($team)
        <h1>This is the view of {{$team}}, later on, this will display information about that team</h1>
    @else
        <x-listing :entity="$teams" />
    @endif
@endsection
