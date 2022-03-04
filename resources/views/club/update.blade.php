@extends('layouts.main')

@section('title', 'Update ' . $club)

@section('content')
    <h1>This will be where you could edit a club</h1>
    <h2>Club updation</h2>

    <form action="{{route('club.update', $club)}}" method="post">
        @csrf
        @method('PUT')

        <label for="name">Name*:</label>
        <input type="text" name="name"><br>
        @error('name')
            <small>*{{$message}}</small>
        @enderror

        <label for="shield">Shield:</label>
        <input type="text" name="shield"><br>
        @error('shield')
            <small>*{{$message}}</small>
        @enderror

        <label for="foundation_date">Foundation Date*:</label>
        <input type="text" name="foundation_date"><br>
        @error('foundation_date')
            <small>*{{$message}}</small>
        @enderror

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
@endsection
