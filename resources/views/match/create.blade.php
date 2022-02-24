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
        <label for="name">Date*:</label>
        <input type="text" name="date"><br>

        <label for="local">Local Team:</label>
        <select name="local_teams" id="">
            <option value=""></option>
            <option value="manchester">Manchester Utd.</option>
            <option value="madrid">Madrid</option>
            <option value="barcelona">FC Barcelona</option>
        </select>
        <br>

        <label for="visitor">Visitor Team:</label>
        <select name="visitor_teams" id="">
            <option value=""></option>
            <option value="manchester">Manchester Utd.</option>
            <option value="madrid">Madrid</option>
            <option value="barcelona">FC Barcelona</option>
        </select>
        <br>

        <label for="status">Match Status:</label>
        <select name="status" id="">
            <option value="In Process" selected>In Process</option>
            <option value="Played">Played</option>
            <option value="Cancelled">Cancelled</option>
        </select>
        <br>

        <label for="result">Match Result:</label>
        <select name="result" id="">
            <option value="Local">Local</option>
            <option value="Visitor">Visitor</option>
            <option value="Draw">Draw</option>
            <option value="Not played yet" selected>Not played yet</option>
        </select>
        <br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
@endsection
