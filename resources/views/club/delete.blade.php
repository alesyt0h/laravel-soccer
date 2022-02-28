@extends('layouts.main')

@section('title', 'Delete ' . $club)

@section('content')
    <h1>This will be for delete a club</h1>
    <h2>Club deletion</h2>
    <form action="" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <label for="confirm">Are you sure you want to delete {{$club}} ?</label>
        <br>
        <button type="submit" name="id" value="{{$club}}">Yes</button>
        <a href="{{url()->previous()}}">No</a>
    </form>
@endsection
