@extends('layouts.main')

@section('title', 'Delete ' . $college)

@section('content')
    @if( Session::has('result') )
        {{-- TODO Move this to a component --}}
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('result') }}
        </div>
    @endif
    <h1>This will be for delete a college</h1>
    <h2>College deletion</h2>
    <form action="{{route('college.destroy', $college)}}" method="post">
        @csrf
        @method('DELETE')

        <input type="hidden" name="_method" value="DELETE">
        <label for="confirm">Are you sure you want to delete {{$college}} ?</label>
        <br>
        <button type="submit" name="id" value="{{$college}}">Yes</button>
        <a href="{{url()->previous()}}">No</a>
    </form>
@endsection
