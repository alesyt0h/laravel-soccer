@extends('layouts.main')

@section('title', 'Update ' . $team)

@section('content')
    <h1>This will be where you could edit a team</h1>
    <h2>Team updation</h2>

    <form action="" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">

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
