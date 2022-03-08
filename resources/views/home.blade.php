@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <h1>This is the homePage</h1>
    <main style="display: grid; grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(2, 1fr);"">
        <div>
            <span>Colleges</span>
            <x-listing :entity="$colleges"/>
            <button>Show all colleges</button>
        </div>
        <div>
            <span>Clubs</span>
            <x-listing :entity="$clubs"/>
            <button>Show all clubs</button>
        </div>
        <div>
            <span>Teams</span>
            <x-listing :entity="$teams"/>
            <button>Show all teams</button>
        </div>
        <div>
            <span>Matches</span>
            <x-listing :entity="$matches"/>
            <button>Show all matches</button>
        </div>
    </main>
@endsection
