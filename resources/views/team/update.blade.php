@extends('layouts.main')

@section('title', 'Update ' . $team)

@section('content')
    @if( Session::has('result') )
        {{-- TODO Move this to a component --}}
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('result') }}
        </div>
    @endif
    <h1>This will be where you could edit a team</h1>
    <h2>Team updation</h2>

    <form action="{{route('team.update', $team)}}" method="post">
        @csrf
        @method('PUT')

        <label for="name">Name*:</label>
        <input type="text" name="name" value="{{$team->name}}"><br>
        @error('name')
            <small>*{{$message}}</small>
        @enderror

        <label for="foundation_date">Foundation Date*:</label>
        <input type="text" name="foundation_date" value="{{$team->foundation_date}}"><br>
        @error('foundation_date')
            <small>*{{$message}}</small>
        @enderror

        <label for="shield">Shield:</label>
        <input type="text" name="shield" value="{{$team->shield}}"><br>
        @error('shield')
            <small>*{{$message}}</small>
        @enderror

        <label for="owner">Owner:</label>
        <input type="radio" name="owner_type" id="" value="college" {{$isCollege}}>College
        <input type="radio" name="owner_type" id="" value="club" {{$isClub}}>Club
         @error('owner_type')
            <small>*{{$message}}</small>
        @enderror
        <br>

        {{-- Show this conditionally depending on the checkbox --}}
        <select name="owner" id="">
            <option value=""></option>
            @foreach ($colleges as $college)
                <option value="{{$college->id}}">{{$college->name}}</option>
            @endforeach
        </select>
        <select name="" id="" style="display:none">
            <option value=""></option>
            @foreach ($clubs as $club)
                <option value="{{$club->id}}">{{$club->name}}</option>
            @endforeach
        </select>
        @error('owner')
            <small>*{{$message}}</small>
        @enderror
        <br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
@endsection
