@extends('layouts.main')

@section('title', 'Create a new match')

@section('content')
    @if( Session::has('result') )
        {{-- TODO Move this to a component --}}
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('result') }}
        </div>
    @endif

    <h1>This is where matches are created</h1>
    <h2>Match creation</h2>

    <form action="" method="post">
        @csrf
        <label for="date">Date*:</label>
        <input type="text" name="date"><br>
        @error('date')
            <small>*{{$message}}</small>
        @enderror

        <label for="local_teams">Local Team:</label>
        <select name="local_teams" id="">
            <option value=""></option>
            <option value="manchester">Manchester Utd.</option>
            <option value="madrid">Madrid</option>
            <option value="barcelona">FC Barcelona</option>
        </select>
        @error('local_teams')
            <small>*{{$message}}</small>
        @enderror
        <br>

        <label for="visitor_teams">Visitor Team:</label>
        <select name="visitor_teams" id="">
            <option value=""></option>
            <option value="manchester">Manchester Utd.</option>
            <option value="madrid">Madrid</option>
            <option value="barcelona">FC Barcelona</option>
        </select>
        @error('visitor_teams')
            <small>*{{$message}}</small>
        @enderror
        <br>

        <label for="status">Match Status:</label>
        <select name="status" id="">
            <option value="in process" selected>In Process</option>
            <option value="played">Played</option>
            <option value="cancelled">Cancelled</option>
        </select>
        @error('status')
            <small>*{{$message}}</small>
        @enderror
        <br>

        <label for="result">Match Result:</label>
        <select name="result" id="">
            <option value="local">Local</option>
            <option value="visitor">Visitor</option>
            <option value="draw">Draw</option>
            <option value="not played yet" selected>Not played yet</option>
        </select>
        @error('result')
            <small>*{{$message}}</small>
        @enderror
        <br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
@endsection
