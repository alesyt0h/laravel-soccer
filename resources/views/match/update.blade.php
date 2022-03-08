@extends('layouts.main')

@section('title', 'Update ' . $match)

@section('content')
    @if( Session::has('result') )
        {{-- TODO Move this to a component --}}
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('result') }}
        </div>
    @endif
    <h1>This will be where you could edit a match</h1>
    <h2>Match updation</h2>

    <form action="{{route('match.update', $match)}}" method="post">
        @csrf
        @method('PUT')

        <label for="match_date">Date*:</label>
        <input type="datetime-local" name="match_date"
               value="{{ Carbon\Carbon::parse($match->match_date)->toDateTimeLocalString('minute') }}"
               max="{{now()->addYear()->toDateTimeLocalString('minute')}}">
        @error('match_date')
            <small>*{{$message}}</small>
        @enderror
        <br>

        <label for="local">Local Team:</label>
        <select name="local" id="">
            <option value=""></option>
            @foreach ($teams as $team)
                <option {{ ($match->local === $team->id) ? 'selected' : '' }} value="{{$team->id}}">{{$team->name}}</option>
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
                <option {{ ($match->visitor === $team->id) ? 'selected' : '' }} value="{{$team->id}}">{{$team->name}}</option>
            @endforeach
        </select>
        @error('visitor')
            <small>*{{$message}}</small>
        @enderror
        <br>

        <label for="status">Match Status:</label>
        <select name="status" id="">
            @foreach ($statuses as $status)
                <option value="{{$status}}" {{($match->status === $status) ? 'selected' : '' }}>
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
                <option value="{{$result}}" {{($match->result === $result) ? 'selected' : '' }}>
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
