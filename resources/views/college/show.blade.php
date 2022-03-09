@extends('layouts.main')

@section('title', $college ?? 'Colleges')

@section('content')

    @if ($college)
        <h1>This is the view of {{$college}}, later on, this will display information about that college</h1>
    @else
        <x-listing :entity="$colleges" type="college" from="show"/>
    @endif
@endsection
