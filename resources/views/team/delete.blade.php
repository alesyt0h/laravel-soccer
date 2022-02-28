@extends('layouts.main')

@section('title', 'Delete ' . $team)

@section('content')
    <h1>This will be for delete a team</h1>
    <h2>Team deletion</h2>
    <form action="" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <label for="confirm">Are you sure you want to delete {{$team}} ?</label>
        <br>
        <button type="submit" name="id" value="{{$team}}">Yes</button>
        <a href="{{url()->previous()}}">No</a>
    </form>
@endsection
