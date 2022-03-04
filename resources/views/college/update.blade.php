@extends('layouts.main')

@section('title', 'Update ' . $college)

@section('content')
    <h1>This will be where you could edit a college</h1>
    <h2>College updation</h2>

    <form action="{{route('college.update', $college)}}" method="post">
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
