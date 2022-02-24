@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <h1>This is the homePage</h1>
    <main style="display: grid; grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(2, 1fr);"">
        <div>
            <span>Colleges</span>
            <x-listing/>
        </div>
        <div>
            <span>Clubs</span>
            <x-listing/>
        </div>
        <div>
            <span>Teams</span>
            <x-listing/>
        </div>
        <div>
            <span>Matches</span>
            <x-listing/>
        </div>
    </main>
@endsection
