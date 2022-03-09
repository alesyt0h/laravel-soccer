@extends('layouts.main')

@section('title', $club ?? 'Clubs')

@section('content')

    @if ($club)
        <h1>This is the view of {{$club}}, later on, this will display information about that club</h1>
    @else
        <x-listing :entity="$clubs" type="club" from="show"/>
    @endif
@endsection
