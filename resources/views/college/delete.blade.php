@extends('layouts.main')

@section('title', 'Delete ' . $college)

@section('content')
    <h1>This will be for delete a college</h1>
    <h2>College deletion</h2>
    <form action="" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <label for="confirm">Are you sure you want to delete {{$college}} ?</label>
        <br>
        <button type="submit" name="id" value="{{$college}}">Yes</button>
        <a href="{{url()->previous()}}">No</a>
    </form>
@endsection
