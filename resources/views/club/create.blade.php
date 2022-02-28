@extends('layouts.main')

@section('title', 'Create a new club')

@section('content')
    @if( Session::has('result') )
        {{-- TODO Move this to a component --}}
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('result') }}
        </div>
    @endif

    <h1>This is where clubs are created</h1>
    <h2>Club creation</h2>

    <form action="" method="post">
        @csrf
        <label for="name">Name*:</label>
        <input type="text" name="name"><br>

        <label for="shield">Shield:</label>
        <input type="text" name="shield"><br>

        <label for="foundation">Foundation Date*:</label>
        <input type="text" name="foundation"><br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
@endsection
