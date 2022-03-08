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
        <label for="match_date">Date*:</label>
        <input type="datetime-local" name="match_date"
               max="{{now()->addYear()->toDateTimeLocalString('minute')}}">
        @error('match_date')
            <small>*{{$message}}</small>
        @enderror
        <br>

        <label for="local">Local Team:</label>
        <select name="local" id="">
            <option value=""></option>
            @foreach ($teams as $team)
                <option value="{{$team->id}}">{{$team->name}}</option>
            @endforeach
        </select>
        @error('local')
            <small>*{{$message}}</small>
        @enderror
        <br>

        <label for="visitor">Visitor Team:</label>
        <select name="visitor" id="">
            <option value=""></option>
            @foreach ($teams as $team)
                <option value="{{$team->id}}">{{$team->name}}</option>
            @endforeach
        </select>
        @error('visitor')
            <small>*{{$message}}</small>
        @enderror
        <br>

        <label for="status">Match Status:</label>
        <select name="status" id="">
            @foreach ($statuses as $status)
                <option value="{{$status}}" {{($status === 'in progress') ? 'selected' : '' }}>
                    {{ucfirst($status)}}
                </option>
            @endforeach
        </select>
        @error('status')
            <small>*{{$message}}</small>
        @enderror
        <br>

        <label for="result">Match Result:</label>
        <select name="result" id="">
            @foreach ($results as $result)
                <option value="{{$result}}" {{($result === 'not played yet') ? 'selected' : '' }}>
                    {{ucfirst($result)}}
                </option>
            @endforeach
        </select>
        @error('result')
            <small>*{{$message}}</small>
        @enderror
        <br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
@endsection
