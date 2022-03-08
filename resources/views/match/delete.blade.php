@extends('layouts.main')

@section('title', 'Delete ' . $match)

@section('content')
    @if( Session::has('result') )
    {{-- TODO Move this to a component --}}
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('result') }}
        </div>
    @endif
    <h1>This will be for delete a match</h1>
    <h2>Match deletion</h2>
    <form action="{{route('match.destroy', $match)}}" method="post">
        @csrf
        @method('DELETE')

        <input type="hidden" name="_method" value="DELETE">
        <label for="confirm">Are you sure you want to delete {{$match}} ?</label>
        <br>
        <button type="submit" name="id" value="{{$match}}">Yes</button>
        <a href="{{url()->previous()}}">No</a>
    </form>
@endsection
