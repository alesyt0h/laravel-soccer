@extends('layouts.main')

@section('title', 'Delete ' . $match)

@section('content')
    <h1>This will be for delete a match</h1>
    <h2>Match deletion</h2>
    <form action="" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <label for="confirm">Are you sure you want to delete {{$match}} ?</label>
        <br>
        <button type="submit" name="id" value="{{$match}}">Yes</button>
        <a href="{{url()->previous()}}">No</a>
    </form>
@endsection
