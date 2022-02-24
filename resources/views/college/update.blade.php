@extends('layouts.main')

@section('title', 'Update ' . $college)

@section('content')
    <h1>This will be where you could edit a college</h1>
    <h2>College updation</h2>

    <form action="" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">

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
