@extends('layouts.main')

@section('title', 'Create a new team')

@section('content')
    @if( Session::has('result') )
        {{-- TODO Move this to a component --}}
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('result') }}
        </div>
    @endif

    <h1>This is where teams are created</h1>
    <h2>Team Creation</h2>

    <form action="" method="POST">
        @csrf
        <label for="name">Name*:</label>
        <input type="text" name="name"><br>
        @error('name')
            <small>*{{$message}}</small>
        @enderror

        <label for="foundation_date">Foundation Date*:</label>
        <input type="text" name="foundation_date"><br>
        @error('foundation_date')
            <small>*{{$message}}</small>
        @enderror

        <label for="shield">Shield:</label>
        <input type="text" name="shield"><br>
        @error('shield')
            <small>*{{$message}}</small>
        @enderror

        <label for="owner">Owner:</label>
        <input type="radio" name="owner_type" id="" value="college">College
        <input type="radio" name="owner_type" id="" value="club">Club
        @error('owner_type')
            <small>*{{$message}}</small>
        @enderror
        <br>
        {{-- Show this conditionally depending on the checkbox --}}
        <select name="owner" id="">
            <option value=""></option>
            <option value="1">Oxford</option>
            <option value="2">Harvard</option>
            <option value="3">Club del Barcelona</option>
        </select>
        @error('owner')
            <small>*{{$message}}</small>
        @enderror
        <br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
@endsection
