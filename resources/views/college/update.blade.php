@extends('layouts.main')

@section('title', 'Update ' . $college)

@section('content')
    @if( Session::has('result') )
        {{-- TODO Move this to a component --}}
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('result') }}
        </div>
    @endif
    <h1>This will be where you could edit a college</h1>
    <h2>College updation</h2>

    <form action="{{route('college.update', $college)}}" method="post">
        @csrf
        @method('PUT')

        <label for="name">Name*:</label>
        <input type="text" name="name" value="{{$college->name}}"><br>
        @error('name')
            <small>*{{$message}}</small>
        @enderror

        <label for="shield">Shield:</label>
        <input type="text" name="shield" value="{{$college->shield}}"><br>
        @error('shield')
            <small>*{{$message}}</small>
        @enderror

        <label for="foundation_date">Foundation Date*:</label>
        <input type="text" name="foundation_date" value="{{$college->foundation_date}}"><br>
        @error('foundation_date')
            <small>*{{$message}}</small>
        @enderror

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
@endsection
